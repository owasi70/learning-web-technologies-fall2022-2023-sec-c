<?php


session_start();


    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];

  
    echo "<p>Name: $name</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Email: $email</p>";





    


?>
