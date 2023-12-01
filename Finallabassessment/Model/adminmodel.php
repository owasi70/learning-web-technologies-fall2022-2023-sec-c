<?php 

require_once('db.php');

function registration($name,$mobile,$username,$password)
  {
      $con= getConnection();
      $sql= "INSERT INTO employeeinfo (name,username,mobile,password) VALUES('{$username}','{$name}','{$mobile}','{$password}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }


?>