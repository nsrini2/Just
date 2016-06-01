<?php

require '/vendor/phpmailer/PHPMailerAutoload.php';

function isValidAadhaar($var)
{
if(is_numeric($var))
  {
    if(isInteger($var) && strlen($var) == 12)
    {
      return true;
    }
    else
    {
    if(!isInteger($var))
      throw new Exception('Invalid Aadhaar number entered; Please enter an integer value!');
    elseif (strlen($var) != 12)
      throw new Exception('Invalid Aadhaar number entered; Please enter a 12 digit integer!');
    }
  }
else
  {
    throw new Exception('Invalid Aadhaar number entered; Please enter an numeric value!');
  }
}

function isInteger($var)
{
  return ctype_digit(strval($var));
}

function isValidPAN($var)
{
  if(strlen($var) == 10)
    return true;
  else {
    throw new Exception('Invalid PAN number '.$var.' entered; Please enter a 10 digit alphanumeric value!');
  }
}

function isValidIndianMobile($var)
{
  if(is_numeric($var))
    {
      if(isInteger($var) && strlen($var) == 10)
      {
        return true;
      }
      else
      {
      if(!isInteger($var))
        throw new Exception('Invalid Mobile number entered; Please enter an integer value!');
      elseif (strlen($var) != 10)
        throw new Exception('Invalid Mobile number entered; Please enter a 10 digit integer!');
      }
    }
  else
    {
      throw new Exception('Invalid Mobile number entered; Please enter an numeric value!');
    }
}

function generateAndSendOTPLink($userfirstname, $userlastname, $useremail)
{
  $encrypteduseremail=md5($useremail, false);
  $mail=getNewSMTPMailerObj();
  $mail->Subject="Registration tp Ju.Mp";
  $msgline1="<p>Dear ".$userfirstname." ".$userlastname.",<br/><br/> Please click on the link below to complete your registration on Ju.Mp</p><br/>";
  $msgline2="<a href='http://localhost:8080/X/user/confirmsignup/$encrypteduseremail'>Confirm Registration</a><br/><br/>";
  $msgline3="<p>Thank you</p><br/>";
  $msgline4="Ju.Mp Admin";
  $emailmsg=$msgline1.$msgline2.$msgline3.$msgline4;
  $mail->Body= html_entity_decode($emailmsg);
  $mail->IsHTML(true);
  $mail->AddAddress($useremail);
  $mail->AddReplyTo("borrow.lend.online@gmail.com", "Ju.Mp Admin");
  if($mail->Send())
    return true;
  else
    return false;
}

function getNewSMTPMailerObj(){
  $mail=new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = false;
  $mail->SMTPAuth=true;
  $mail->SMTPSecure='ssl';
  $mail->Host="smtp.gmail.com";
  $mail->Port=465;
  $mail->Username="borrow.lend.online@gmail.com";
  $mail->Password="skipper9";
  $mail->setFrom("borrow.lend.online@gmail.com", 'Ju.Mp Admin');
  $mail->FromName="Ju.Mp Admin";
  return $mail;
}










 ?>
