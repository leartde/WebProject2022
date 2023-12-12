var email = document.forms['loginform']['email'];
var password = document.forms['loginform']['password'];

var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');

email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', password_Verify);


function validated(){

    if (email.value.length < 9){
        email_error.style.display="block";
        email.focus();
        return false;

    }

    if (password.value.length < 6){
        password_error.style.display="block";
        password.focus();
        return false;

    }

    
    alert('You have succesfully loged in!');
    console.log('Log In Succesful');
    

    }

    
    



function email_Verify(){
    if(email.value.length > 8){
        email_error.style.display="none";
        return true;


    }
}

function password_Verify(){
    if(password.value.length > 6){
        password_error.style.display="none";
        return true;
    }
    
}

