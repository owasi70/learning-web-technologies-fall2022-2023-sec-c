<?php

   $newpassword=$_REQUEST['NewPassword'];
   $curpassword=$_REQUEST['CurPassword'];
   $renewpassword=$_REQUEST['ReNewPassword'];


   if($newpassword=="" ||$curpassword==""||$renewpassword=="")
   {
     echo "All fields must be filled";
   }
    


  else if($curpassword==$newpassword)
  {
    echo "Current Password and New Password must not be same";
  }
  else if($newpassword!==$renewpassword)
  {
    echo"New Password and Re type New Password must be same";
  }
  else{
    echo"Password is changed successfully";
  }

?>