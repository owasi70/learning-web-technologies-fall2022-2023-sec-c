function checkblood()
{
    let bloodgroup=document.getElementById('blood').value ;


    if(bloodgroup==' ')
    {
         alert("Please Select a bloodgroup");
    }

   else
   {
    document.getElementById("id6").innerHTML=bloodgroup;
   }
    
        
    
}