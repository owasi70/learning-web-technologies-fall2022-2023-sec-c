
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="../Asset/personvalidation.js"></script>
</head>
<body>
       <form action="../Controller/registercheck.php" method="post" enctype="" onsubmit=" validateregister()" >

       <fieldset style="width: 600px; ">
            <Table>
                <tr>
                    <th colspan="2">
                        <h2>Register</h2>
                       
                    </th>
                </tr>
                
                    <td>
                       Name:
                    </td>
                    <td>
                        <input type="text" name="name" id="name" value=""><br>
                    </td>
                
               
                <tr>
                    <td>
                        Phone:
                    </td>
                    <td>
                        <input type="text" name="phone" id="phone" value=""><br>
                    </td>

                    
                 </tr>
                 <tr>
                 <td>
                       Email ID:
                    </td>
                    <td>
                     <input type="email" name="email" id="email" onblur="checkemailavailable()">
                     
                     <p id="3"></p>
                     
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
                        
                    <input type="password" name="conPassword" id="conPassword" value=""><br>   
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