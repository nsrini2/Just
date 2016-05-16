<?php
require_once('/app/lib/libfunc.php');

class UserController extends BaseController{

     function UserProfile()
     {
        if($this->f3->exists('POST.create'))
        {
            $userpersdtls=new UserPersonalDetails($this->db);
            $web = \Web::instance();
            $overwrite=true;
            $slug=false;
            $web->receive(function($file,$formFieldName){
              if($formFieldName == 'User_Photo'){
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


      function UserContact(){
        $this->f3->set('LoginUserId',6);
        $usercontactdtls=new UserContactDetails($this->db);
        if($this->f3->get('POST.Address_Type') == 'Current' || $this->f3->get('POST.Address_Type') == 'Permanent'){
           $this->f3->set('POST.User_ID', $this->f3->get('LoginUserId'));
         }
        $usercontactdtls->add();
        $this->f3->reroute('/user/contact');
      }


     function DisplayUserPersonalDetails(){
        $this->f3->set('LoginUserId',15);
        $userpersdtls=new UserPersonalDetails($this->db);
        if($this->f3->exists('LoginUserId'))
          $userpersdtls->getById($this->f3->get('LoginUserId'));
          $this->f3->set('view', 'personal.html');
     }

     function DisplayUserContactDetails(){
         $this->f3->set('view', 'contact.html');
     }

     function DisplayUserCurrentAddrDetails(){
       $this->f3->set('LoginUserId',15);
       $usercontactdtls=New UserContactDetails($this->db);
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
}

?>
