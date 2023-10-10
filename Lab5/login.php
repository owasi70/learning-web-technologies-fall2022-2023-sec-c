<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") 

{    $username = $_POST["UserName"];
    $password = $_POST["Password"];

    if (empty($username) || empty($password))
    
    {echo "Fill username and password*"; }
     else {
        if (
            isset($_COOKIE['Name']) &&
            isset($_COOKIE['Email']) &&
            isset($_COOKIE['UserName']) &&
            isset($_COOKIE['Gender']) &&
            isset($_COOKIE['DOB']) &&
            isset($_COOKIE['Password'])
        ) {
            $name = $_COOKIE['Name'];
            $email = $_COOKIE['Email'];
            $storedname = $_COOKIE['UserName'];
            $gender = $_COOKIE['Gender'];
            $dob = $_COOKIE['DOB'];
            $storedPassword = $_COOKIE['Password'];

            if ($username === $storedname && $password === $storedPassword)
            
            {header("Location: dashboard.php");
                exit;
            } 
        } 
    }
}
?>


<html>
<head>
    <title>LOG IN</title>
</head>
<body>
    <header>
        <img src="xcompany.png" alt="X Company Logo">
        <section style="text-align: right;">
        <a href="publichome.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
        </section>
        
    </header>
    <form action="" method="Post" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
        <fieldset style="width: 40%;" >
            <legend>LOGIN</legend>
            <table style="width: 100%;">
                <tr>
                    <td>User Name</td>
                    <td>: <input type="text" name="UserName" value=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: <input type="text" name="Password" value=""></td>
                </tr>
            </table>
            <hr>
            <input type="checkbox" name="Remember" value="">Remember Me <br> <br>
            
            <input type="submit" value="Submit">
            <a href="forgotpassword.php">Forgot Password?</a>
        </fieldset>
    </form>
    <footer>
        <p style="text-align: center;">Copyright © 2017</p>
    </footer>
</body>
</html>