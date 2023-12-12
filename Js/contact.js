var contact_name = document.forms['contact-form']['contact_name'];
var contact_email = document.forms['contact-form']['contact_email'];

var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');

contact_name.addEventListener('textInput',name_Verify);
contact_email.addEventListener('textInput',email_Verify);



function validated(){
    if(contact_name.value.length < 3){
        name_error.style.display="block";
        name_error.innerHTML ="Please fill your name";
        return false;

    }

    if(contact_email.value.length < 8){
        email_error.style.display = "block";
        email_error.innerHTML ="Please fill your email";
        return false;

    }
}

function name_Verify(){
    if(contact_name.value.length > 2){
        name_error.style.display="none";
        return true;
    }

}

function email_Verify(){
    if(contact_email.value.length > 7){
        email_error.style.display="none";
        return true;


    }
}
