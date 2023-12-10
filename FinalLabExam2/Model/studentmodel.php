<?php 
require_once('db.php');




function stdsignup($name,$username,$mobile,$password)
  {
      $con= getConnection();
      
      $sql= "INSERT INTO student (name,username,mobile,password) VALUES('{$name}','{$username}','{$mobile}','{$password}')";
    
      $result = mysqli_query($con, $sql);


    if ($result) {
        return true;
    } else {
        return false;
    }
   }




function signinUser($username, $password)
{
   
    $con = getConnection();
    $sql = "SELECT * FROM student WHERE username='{$username}' AND password='{$password}'";
    
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count)
    {
        header("location: ../view/studenthome.php");
        return true;
    }
    
    else{
        return false;
    }


}


?>