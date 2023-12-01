




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../Asset/registervalidation.js"></script>
</head>
<body>
       <form action="../controller/registrationcheck.php" method="post" enctype="" onclick=" return validateregistration()">

       <fieldset style="width: 500px; ">
            <Table>
                <tr>
                    <th colspan="2">
                        <h2>Registration</h2>
                       
                    </th>
                </tr>
                
                    <td>
                      Employee Name:
                    </td>
                    <td>
                        <input type="text" name="Name" id="Name" value=""><br>
                    </td>
                
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="text" name="Username" id="Username" value=""><br>
                    </td>
                </tr>
               
                <tr>
                    <td>
                        Mobile:
                    </td>
                    <td>
                        <input type="text" name="Mobile" id="Mobile" value="">
                    </td>
                
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="Password" id="Password" value=""><br>
                    </td>
                </tr>
                
                <td>
                        Confirm Password:
                    </td>
                    <td>
                        
                    <input type="password" name="conPassword" value=""><br>   
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