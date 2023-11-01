<?php
require_once 'db.php';
function register($id, $password, $name, $usertype)
{

    $con = getConnection();
    $sql = "SELECT * FROM usersinfo where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return false;
    } else {
        $sql2 = "INSERT INTO usersinfo (id,password,name,usertype) VALUES('{$id}','{$password}','{$name}' , '{$usertype}')";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            return true;
        } else {
            return false;
        }
    }
}
?>







?>