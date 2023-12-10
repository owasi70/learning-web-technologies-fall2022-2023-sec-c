<?php 
session_start();

require_once('../Model/studentmodel.php');
$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$mobile = $_REQUEST['mobile'];
$password = $_REQUEST['password'];
$conpassword = $_REQUEST['conpassword'];


if ($name == '' || $username == '' || $mobile == '' || $password == '' ||  $conpassword == '' ) {
    echo 'All Fields must be filled.';
}

else{
    $status = stdsignup($name,$username,$mobile,$password);
    if ($status) {
        header('location:../view/login.php');
    } else {
        echo 'Username or Email Already Taken.';
    }
}
?>