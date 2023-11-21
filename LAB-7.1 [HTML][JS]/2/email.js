function emailcheck()
{

    let email=document.getElementById('Emailid').value ;

    if(email==' ')
    {
        alert("Cannot be empty");
    }
    else if(!email.includes('@')||!email.includes('.'))
    {
        alert("Must be a valid address") ;
    }
    
    else
    {
        document.getElementById("id2").innerHTML= email;
    }

}