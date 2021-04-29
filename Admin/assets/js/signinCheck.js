"use strict"

function validationSignin(){
    
    // extracting the values from the form
    const username = document.forms['signinForm']['username'].value;
    const password = document.forms['signinForm']['password'].value;
    

    // validating the values
    if(username == "" || password == ""){
        alert("Fill up all the information");
        return false;

    }else{
        return true;
    }
}