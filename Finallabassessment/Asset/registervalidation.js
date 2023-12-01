function validateregistration()
{

    let name = document.getElementById("Name").value;
    let username = document.getElementById("Username").value;
    let mobile = document.getElementById("Mobile").value;
    let password = document.getElementById("Password").value;



    if (name==''|| username==""||mobile==""||password=='')
    {
        alert("Please fill all fields")
        return false;
    }

    else{
         return true;

    }
}