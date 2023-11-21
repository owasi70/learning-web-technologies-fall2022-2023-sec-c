function profile()
{
    let userid=document.getElementById('id').value ;
    let userpic=document.getElementById('Picture').value ;

    if(userid=='')
    {
        alert("User Id cannot be empty");
    }

    else if (userid<0)
    {
        alert("User Id cannot be negative");
    }

    else if(!userpic)
    {
        alert("Please Upload Picture");
    }

    else
    {
        document.getElementById('printid').innerHTML=userid;
      
    }
}