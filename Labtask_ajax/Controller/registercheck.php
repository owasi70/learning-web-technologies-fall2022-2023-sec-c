<?php 
require_once ("../Model/personmodel.php");

$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$conPassword= $_REQUEST['conPassword'];





if ($name==''||$phone=='' ||$email==''||$password=='' || $conPassword==''  ) {
    echo 'Please fill all fields';
} 

elseif ($password != $conPassword) {
    echo 'Password doesnot match.';
}
 else 
 {
   $status= register($name,$phone,$email,$password);
   if ($status) {
    header('location:../View/login.php');
   } 
   else {
    echo 'Error';
   }
}

?>




?>