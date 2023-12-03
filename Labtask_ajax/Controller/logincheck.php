<?php 
     session_start();
     require_once('../Model/personmodel.php');
     
     $email = $_REQUEST['email'];
     $password = $_REQUEST['password'];
 
 
     if($email == "" || $password == ""){
         echo "Please fill all fields";   
     }else{
         
         $statuscheck = signinUser($email, $password);
         
         if($statuscheck){
             $_SESSION['flag'] = "true";
             header("location: ../View/home.php");
         }
         
         else{
             header("location:../View/register.php") ;
         }
     }
?>