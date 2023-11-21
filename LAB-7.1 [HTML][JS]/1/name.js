
function myname()
{
     let name=document.getElementById('name').value ;
     let validchar="abcdefghijklmnopqrstABCDEFGHIJKLMNOPQRST.-";
    // let notvalidchar="1234567890_[]{};:<>,/?!@#$%^&*()=+"
    let firstchar="abcdefghijklmnopqrstABCDEFGHIJKLMNOPQRST";


     if(name==null)
     {
        alert("Cannot be empty");
     }

     else if(name.length<2)
     {
        alert("Must contain at least two words");
     }
     else if (firstchar.indexOf(name[0]) === -1) 
     {
        alert("Must start with a letter");
    }
     else
     { 
        document.getElementById('id1').innerHTML= name ;

     }
     
       
     

}