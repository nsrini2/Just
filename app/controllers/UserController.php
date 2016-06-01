<?php
require_once('/app/lib/libfunc.php');

class UserController extends AuthController{

function UserProfile()
{
  if($this->f3->exists('POST.create'))
  {
      $userpersdtls=new UserPersonalDetails($this->db);
      $web = \Web::instance();
      $overwrite=true;
      $slug=false;
      $web->receive(function($file,$formFieldName){
          if($formFieldName == 'User_Photo')
          {
            $this->f3->set('POST.User_Photo', $file);
            $this->f3->set('POST.User_Photo_Filename',$file["name"]);
          }
      },$overwrite,$slug);
      try
        {
           if(isValidAadhaar($this->f3->get('POST.Aadhar_No')) && isValidPAN(trim($this->f3->get('POST.PAN_No'))))
             {
               if($this->f3->exists('POST.User_ID'))
                 {
                  try
                  {
                    $userpersdtls->edit($this->f3->get('POST.User_ID'));
                  }
                  catch(\PDOException $e)
                  {
                    $pdoerror = $e->errorInfo;
                    $this->f3->set('PDOERRORMSG', $pdoerror[0].' '.$pdoerror[2]);
                    $this->logger->write($this->f3->get('PDOERRORMSG'));
                  }
                 }
            else
                {
                  try
                  {
                    $userpersdtls->add();
                  }
                  catch(\PDOException $e)
                  {
                    $pdoerror = $e->errorInfo;
                    $this->f3->set('PDOERRORMSG', $pdoerror[0].' '.$pdoerror[2]);
                    $this->logger->write($this->f3->get('PDOERRORMSG'));
                  }
                 }
               }
        }
       catch(Exception $e)
        {
             $error = $e->getMessage();
             $this->f3->set('ERRORMSG', $error);
             $this->logger->write($this->f3->get('ERRORMSG'));
         }
           $this->f3->reroute('/user/profile');
    }
else
    {
        $this->f3->set('view','profile.html');
    }
}




    function UpdateAddress($add1, $add2, $city, $pincode, $state, $addrtype){
       $useraddtls=new UserAddressDetails($this->db);
       $this->logger->write("City is: ".$city);
       try
       {
       if(isInteger($pincode)){
         $useraddtls->Address1 = $add1;
         $useraddtls->Address2 = $add2;
         $useraddtls->City = $city;
         $useraddtls->State = $state;
         $useraddtls->Pincode = $pincode;
         $useraddtls->Address_Type = $addrtype;
         try{
           $useraddtls->add();
         }
         catch(PDOException $e){
           $pdoerror = $e->errorInfo;
           $this->f3->set('PDOERRORMSG', $pdoerror[0].' '.$pdoerror[2]);
           $this->logger->write($this->f3->get('PDOERRORMSG'));
         }
       }
     }
     catch(Exception $e){
       $error = $e->getMessage();
       $this->f3->set('ERRORMSG', $error);
       $this->logger->write($this->f3->get('ERRORMSG'));
     }
     $this->f3->reroute('/user/displaycontactdetails');
  }


     function DisplayUserContactDetails(){
         $this->f3->set('view', 'contact.html');
     }

     function DisplayUserCurrentAddrDetails(){
       $this->f3->set('LoginUserId',15);
       $usercontactdtls=New UserAddressDetails($this->db);
       if($this->f3->exists('LoginUserId'))
          $usercontactdtls->getById($this->f3->get('LoginUserId'));
       $this->f3->set('view','currentaddr.html');
     }

     function DisplayUserPermAddrDetails(){
       $this->f3->set('view','permaddr.html');
     }

     function UserLogin(){
      $this->f3->set('LoginUserId', 8);
      $this->f3->set('LoginUserLastName','ranaut');
      $this->f3->set('LoginUserFirstName','kangana');
    }

    function ShowImg(){
      $web = \Web::instance();
      $userphoto=$web->send($userImgFilename, NULL,true);
      $this->f3->set('USERFILEPATH', $userImgFilename);
      $this->logger->write($this->f3->get('USERFILEPATH'));
      $this->f3->set('USERID', $this->f3->get('POST.userid'));
      $this->logger->write("User id is: ".$this->f3->get('USERID'));
      $this->f3->set('view', 'showimg.html');
    }


  // Function to display User Personal Details menu
   function DisplayUserPersonalDetails()
   {
      $userpersdtls=new UserPersonalDetails($this->db);
      $userid=$this->f3->get('SESSION.loggedinuserid');
      $this->logger->write("Logged in user is: ".$userid);
      if($userid != NULL)
        $userpersdtls->getById($userid);
      $this->f3->set('view', 'personal.html');
   }

 // Function to logout of Ju.Mp application
   function Logout()
   {
     $this->f3->set('SESSION.loggedinuser', NULL);
     $this->f3->set('SESSION.isuserloggedin', NULL);
     $this->f3->set('SESSION.loggedinuserid', NULL);
     $this->f3->reroute('/');
   }
 }
?>
