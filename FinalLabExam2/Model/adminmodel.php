<?php 

require_once('db.php');




function courseadd($cname,$courseid,$coursefee,$capaity)
  {
      $con= getConnection();
      
      $sql= "INSERT INTO course (cname,cid,coursefee,scapacity) VALUES('{$cname}','{$courseid}','{$coursefee}','{$capaity}')";
    
      $result = mysqli_query($con, $sql);


    if ($result) {
        return true;
    } else {
        return false;
    }
   }


?>