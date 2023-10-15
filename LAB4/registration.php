<?php
 

 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $username = $_POST["UserName"];
    $password = $_POST["Password"];
    $confirmPassword = $_POST["ConfirmPassword"];
    $gender = isset($_POST["Gender"]) ? $_POST["Gender"] : "";
    $dob = $_POST["dob"];

 }
















?>