<?php
require_once('/app/lib/libfunc.php');

class IndexController extends BaseController
{
  function Home()
  {
    $this->f3->set('view','home.html');
  }

  // Function to save Ju.Mp signup details
  function SignUp()
  {
    if($this->f3->exists('POST.create'))
    {
      $audit = \Audit::instance();
      $tmpuserpersdetails = new TempUserPersonalDetails($this->db);

      $userfirstname = $this->f3->get('POST.User_First_Name');

      $userlastname = $this->f3->get('POST.User_Last_Name');

      $password = $this->f3->get('POST.Password');

      $useremail = $this->f3->get('POST.Email');
      $isvalidemail = $audit->email($useremail);
      $encryptedotp = md5($useremail, false);

      $userdob = $this->f3->get('POST.DOB');
      $userage = (date('Y')-date('Y',strtotime($userdob)));

      $usergender = $this->f3->get('POST.Gender');

      $source = $this->f3->get('POST.Source');

      $tc=$this->f3->get('POST.TC');
      $tcaccepted = isset($tc);

     if($tcaccepted && $isvalidemail && $userfirstname!=NULL && $userlastname!=NULL && $password!=NULL && $useremail!=NULL && $userdob!=null && $userage>=18 && $usergender!=NULL && $source!=NULL)
     {
       $this->f3->set('POST.Password', password_hash($password, PASSWORD_DEFAULT));
       $this->f3->set('POST.User_Agent', $this->f3->get('AGENT'));
       $this->f3->set('POST.User_IP',$this->f3->get('IP'));
       $this->f3->set('POST.Encrypted_OTP', $encryptedotp);
       if($audit->isdesktop())
          $this->f3->set('POST.User_Device','Desktop/ Laptop');
       elseif($audit->ismobile())
          $this->f3->set('POST.User_Device','Mobile');
       elseif($audit->isbot())
          $this->f3->set('POST.User_Device','Bot');
      try
       {
          $tmpuserpersdetails->add();
          try
          {
            if (generateAndSendOTPLink($userfirstname, $userlastname, $useremail))
                $this->f3->set('CONFIRMOTPMSG',"A message has been sent to your email. Please click on the message link to confirm your registration. Thank you.");
          }
          catch(Exception $e){
            $error=$e->getMessage();
            $this->logger->write($error);
            $this->f3->set('ERRORMSG', $error);
          }

  /*
          $this->f3->set('SESSION.loginuser', $userfirstname.''.$userlastname);
          $this->f3->set('SESSION.loginid', $useremail);
          $this->f3->set('SESSION.isuserloggedin', true);
          $userid = $userpersdetails->getUserIdByEmail($useremail);
          $this->f3->set('SESSION.userid',$userid);
  */

       }
       catch(PDOException $e)
       {
         $pdoerror = $e->errorInfo;
         $this->f3->set('PDOERRORMSG', $pdoerror[0].' '.$pdoerror[2]);
         $this->logger->write($this->f3->get('PDOERRORMSG'));
       }
       catch(Exception $e)
       {
         $error=$e->getMessage();
         $this->logger->write($error);
         $this->f3->set('ERRORMSG', $error);
       }
     }
     else
     {
       if($userfirstname==NULL)
           $this->f3->set('ERRORMSG', "First Name field is mandatory; Please enter a valid text value for it!");
       elseif($userlastname==NULL)
           $this->f3->set('ERRORMSG', "Last Name field is mandatory; Please enter a valid text value for it!");
       elseif($password==NULL)
           $this->f3->set('ERRORMSG', "Password field is mandatory; Please enter a valid text value for it!");
       elseif($useremail == NULL)
           $this->f3->set('ERRORMSG', "Email field is mandatory; Please enter a valid text value for it!");
       elseif($userdob==NULL)
           $this->f3->set('ERRORMSG', "DOB field is mandatory; Please enter a valid value for it!");
       elseif($userage < 18)
           $this->f3->set('ERRORMSG', "You need to be 18 years of age to sign up to Ju.Mp!");
       elseif($usergender==NULL)
           $this->f3->set('ERRORMSG', "Gender field is mandatory; Please select a value for it!");
       elseif($source==NULL)
           $this->f3->set('ERRORMSG', "Source field is mandatory; Please select a value for it!");
       elseif(!$isvalidemail)
           $this->f3->set('ERRORMSG', "Email value is invalid; Please enter a valid value for it!");
       elseif(!$tcaccepted)
            $this->f3->set('ERRORMSG', "Please accept Terms & Conditions to sign up to Ju.Mp!");
       $this->logger->write($this->f3->get('ERRORMSG'));
     }
   }
   $this->f3->set('view','home.html');
  }


  // Function to do site-login
  function UserLogin()
  {

  }

 //Confirm registration to site when user clicks on link in email message
 function ConfirmRegistration()
 {
   $tmpuser=new TempUserPersonalDetails($this->db);
   $user = new UserPersonalDetails($this->db);
   if($tmpuser->isUserSignedUp($this->f3->get('PARAMS.skbn')))
   {
      $tmpuser->confirmTempUser($this->f3->get('PARAMS.skbn'));
      $tmpuser->getUserByEncryptedOTP($this->f3->get('PARAMS.skbn'));
      $this->f3->set('SESSION.loggedinuser', $tmpuser->User_First_Name.' '.$tmpuser->User_Last_Name);
      $this->f3->set('SESSION.isuserloggedin', true);
      $this->f3->set('SESSION.loggedinuserid', $user->getUserIdByEmail($tmpuser->Email));
      $this->logger->write("User is signed up!!!".$this->f3->get('SESSION.loggedinuser'));
   }
   else
   {
     $this->f3->set('ERRORMSG', "There was a problem in confirming your registration to Ju.Mp. Please sign up again!");
     $this->f3->set('view','home.html');
   }
    $this->f3->reroute('/user/profile');
 }


// Function to display Terms and Conditions
 function GetTC()
 {
     $web = \Web::instance();
     $this->f3->set('TCTEXT', $web->filler(10,15,false));
     $this->f3->set('view', 'home.html');
 }
}

?>
