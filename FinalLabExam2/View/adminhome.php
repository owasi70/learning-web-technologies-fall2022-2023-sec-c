<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Home</title>
</head>
<body>
<form action="../controller/coursecheck.php" method="post" enctype="" >

<fieldset style="width: 500px; ">
    <Table>
        <tr>
            <th colspan="2">
                <h2>ADD COURSE</h2>

            </th>
        </tr>

        <td>
            Course Name:
        </td>
        <td>
            <input type="text" name="cname" id="cname" value=""><br>
        </td>

        <tr>
            <td>
                Course ID:
            </td>
            <td>
                <input type="number" name="courseid" id="courseid" value=""><br>
            </td>
        </tr>

        <tr>
            <td>
               Course fee:
            </td>
            <td>
                <input type="number" name="coursefee" id="coursefee" value="" min="1">
            </td>

        </tr>
        <tr>
            <td>
                Student Capacity:
            </td>
            <td>
                <input type="number" name="capacity" id="capacity" value="" min="1"><br>
            </td>
        </tr>

        
        <tr>

            <td>

                <input type="submit" value="Add Course">

            </td>

        </tr>



       

    </Table>

</fieldset>

</form>


</body>
</html>