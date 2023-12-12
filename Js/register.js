var firstName = document.forms['signupform']['emri'];
var lastName = document.forms['signupform']['mbiemri'];
var email = document.forms['signupform']['email'];
var password = document.forms['signupform']['password'];
var cPassword = document.forms['signupform']['cPassword']

var firstname_error = document.getElementById('firstname_error');
var lastname_error = document.getElementById('lastname_error');
var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');
var cpass_error = document.getElementById('cpass_error');

firstName.addEventListener('textInput', firstname_Verify);
lastName.addEventListener('textInput', lastName_Verify);
email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', password_Verify);
cPassword.addEventListener('textInput', cPassword_verify);

function validated(){

    const nameRegex = /^[A-Za-z]+$/;
    const emailRegex = /^[\w.+-]+@[\w.-]+.[a-zA-Z]{2,}$/;
   



    if (firstName.value.length < 3){
        firstname_error.style.visibility="visible";
        firstname_error.innerHTML ="Please fill your first name"
        // email.focus();
        return false;

    }

    if(!firstName.value.match(nameRegex)){
        firstname_error.style.visibility="visible";
        firstname_error.innerHTML ="Name must only contain letters";
        return false;

    }

    if (lastName.value.length < 3){
        lastname_error.style.visibility="visible";
        lastname_error.innerHTML ="Please fill your last name"
        // email.focus();
        return false;

    }

    if(!lastName.value.match(nameRegex)){
        lastname_error.style.visibility="visible";
        lastname_error.innerHTML ="Last name must only contain letters";
        return false;

    }

    if (email.value.length < 9){
        email_error.style.visibility="visible";
        email_error.innerHTML ="Please fill your email"
        // email.focus();
        return false;

    }

    if(!email.value.match(emailRegex)){
        email_error.style.visibility="visible";
        email_error.innerHTML ="Please enter a valid email";
        return false;
    }

    if (password.value.length < 6){
        pass_error.style.visibility="visible";
        pass_error.innerHTML ="Password must contain at least 6 characters"
        // email.focus();
        return false;

    }

   

    if (cPassword.value.length < 6){
        cpass_error.style.visibility="visible";
        cpass_error.innerHTML ="Please confirm your password"
        // email.focus();
        return false;

    }

    if (password.value != cPassword.value){
        
        cpass_error.style.visibility="visible";
        cpass_error.innerHTML ="Password does not match "
        return false;

    }

// document.getElementById('form').submit();
alert('You have succesfully signed up!');
console.log('Form Submitted');



}

function firstname_Verify(){
    if( firstName.value.length > 2){
        firstname_error.style.visibility="hidden";
        return true;
    }

    if(firstName.value.match(nameRegex)){
        firstname_error.style.visibility="hidden";
        return true;

    }
}


function lastName_Verify(){
    if(lastName.value.length > 2){
        lastname_error.style.visibility="hidden";
        return true;

    }

    if(lastName.value.match(nameRegex)){
        lasttname_error.style.visibility="hidden";
        return true;

    }
}

function email_Verify(){
    if(email.value.length > 9){
        email_error.style.visibility="hidden";
        return true;

    }

    if(email.value.match(emailRegex)){
        email_error.style.visibility="hidden";
        return true;

    }


}
function password_Verify(){
    if(password.value.length > 5){
       password_error.style.visibility="hidden";
        return true;


    }
}


function cPassword_verify(){
    if(cPassword.value.length > 6){
        cPassword_error.style.visibility="hidden";
        return true;


    }
}


