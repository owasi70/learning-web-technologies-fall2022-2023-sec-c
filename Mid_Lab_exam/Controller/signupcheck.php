<?php
session_start();
require_once "../Model/usermodel.php";

$id = $_REQUEST['id'];
$password= $_REQUEST['password'];
$conpassword= $_REQUEST['conpassword'];
$name = $_REQUEST['name'];
$usertype =(isset($_REQUEST['usertype']))?$_REQUEST['usertype']:'';




if (
    $id=='' ||$password=='' ||$conpassword=='' ||$name==''|| $usertype=='') 
    {
    echo 'All Fields must be filled.';
} 
elseif ($password!==$conpassword) 
{
    echo'Password doesnt match';

   } else {

       $status=register($id,$password,$name,$usertype);
       if($status){
       header('location:../View/login.php');
       }
    echo 'Username or Email Already Taken.';
   }
