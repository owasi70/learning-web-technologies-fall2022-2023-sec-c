<?php 
session_start();
require_once('../Model/adminmodel.php');
$cname = $_REQUEST['cname'];
$courseid = $_REQUEST['courseid'];
$coursefee = $_REQUEST['coursefee'];
$capaity = $_REQUEST['capacity'];


    $status = courseadd($cname,$courseid,$coursefee,$capaity);
    if ($status) {
        header('location:../view/adminhome.php');
    } else {
        echo 'Error';
    }

?>