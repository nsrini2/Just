<?php

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










 ?>
