<?php 
     session_start();
     require_once('../Model/personmodel.php');
     
     $email = $_REQUEST['email'];
 
 
    
         
         $statuscheck = checkemail($email);
         
         if($statuscheck){


            echo"Email Available ";
         }
         
         else{

            echo"Email Not Available";
         }
     
?>