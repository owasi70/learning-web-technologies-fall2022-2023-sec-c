<!DOCTYPE html>
<html lang="en">
<head>
     <title>Log in</title>
</head>
<body>
<form action="../controller/signincheck.php" method="post" enctype="">

<fieldset style="width: 500px; ">
    <Table>
        <tr>
            <th colspan="2">
                <h2>Log In</h2>

            </th>
        </tr>

        

        <tr>
            <td>
                Username:
            </td>
            <td>
                <input type="text" name="username" id="username" value=""><br>
            </td>
        </tr>

       
        <tr>
            <td>
                Password:
            </td>
            <td>
                <input type="password" name="password" id="password" value=""><br>
            </td>
        </tr>

        

        <tr>

            <td>

                <input type="submit" value="Sign in">

            </td>

        </tr>



        <tr>

            <td>
                <a href="signup.php"><input type="button" value="Sign Up"></a>
            </td>
        </tr>

    </Table>

</fieldset>

</form>

</body>
</html>