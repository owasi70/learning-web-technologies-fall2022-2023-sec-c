
function validateregister() {
  
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let conPassword = document.getElementById('conPassword').value;

    
    if (name =='' || phone =='' || email =='' || password == '' || conPassword == '') {
        alert('Please fill all fields');
        return false;
    }

    if (password !== conPassword) {
        alert('Password does not match.');
        return false;
    }

    return true;
}


function checkemailavailable() {
    
    let email = document.getElementById('email').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../Controller/emailcheck.php', true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

   
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('3').innerHTML = this.responseText;
        }
    };

    xhttp.send('email=' + email);
}

