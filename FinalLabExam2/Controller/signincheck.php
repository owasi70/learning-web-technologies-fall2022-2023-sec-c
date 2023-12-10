<?php 
     session_start();
     require_once('../Model/studentmodel.php');
     $username = $_REQUEST['username'];
     $password = $_REQUEST['password'];
 
 
     if($username == "" || $password == ""){
         echo "Null username/password!";   
     }else{
         
         $status = signinUser($username, $password);
         if($status){
             $_SESSION['flag'] = "true";
             
         }else{
             echo "Password incorrect";
         }
     }
?>