<?php 

require_once ("../Model/adminmodel.php");

$name = $_REQUEST['Name'];
$username = $_REQUEST['Username'];
$mobile= $_REQUEST['Mobile'];
$password= $_REQUEST['Password'];
$conPassword= $_REQUEST['conPassword'];




if ($name==''||$username=='' ||$mobile==''||$password=='' || $conPassword==''  ) {
    echo 'Please fill all fields';
} 

elseif ($password != $conPassword) {
    echo 'Password doesnot match.';
}
 else 
 {
   $status= registration($name,$mobile,$username,$password,);
   if ($status) {
    header('location:../View/login.php');
   } 
   else {
    echo 'Error';
   }
}

?>