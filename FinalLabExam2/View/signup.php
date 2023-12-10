<!DOCTYPE html>
<html lang="en">

<head>

    <title>Student Sign Up</title>
</head>

<body>
    <form action="../controller/signupcheck.php" method="post" enctype="" onsubmit=" return validatesignup();">

        <fieldset style="width: 500px; ">
            <Table>
                <tr>
                    <th colspan="2">
                        <h2>Registration</h2>

                    </th>
                </tr>

                <td>
                    Student Name:
                </td>
                <td>
                    <input type="text" name="name" id="name" value=""><br>
                </td>

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
                        Mobile:
                    </td>
                    <td>
                        <input type="text" name="mobile" id="mobile" value="">
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

                <td>
                    Confirm Password:
                </td>
                <td>

                    <input type="password" name="conpassword" value=""><br>
                </td>

                <tr>

                    <td>

                        <input type="submit" value="Sign up">

                    </td>

                </tr>



                <tr>

                    <td>
                        <a href="login.php"><input type="button" value="Sign in"></a>
                    </td>
                </tr>

            </Table>

        </fieldset>

    </form>



</body>

</html>