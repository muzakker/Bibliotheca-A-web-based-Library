"use strict"
const myForm = document.getElementById("signupForm");
myForm.addEventListener('submit', (e)=>{
    e.preventDefault();
    validation();
})

function validation(){
    
    const formData = new FormData(myForm);

    // extracting the values from the form
    const username = document.forms['signupForm']['username'].value;
    const name = document.forms['signupForm']['name'].value;
    const email = document.forms['signupForm']['email'].value;
    const gender = document.forms['signupForm']['gender'].value;
    const day = document.forms['signupForm']['dd'].value;
    const month = document.forms['signupForm']['mm'].value;
    const year = document.forms['signupForm']['yyyy'].value;
    const user_type = document.forms['signupForm']['user_type'].value;
    const file = document.forms['signupForm']['picture'].value;
    const password = document.forms['signupForm']['password'].value;
    const confirmPassword = document.forms['signupForm']['confirmPassword'].value;

    

    // validating the values
    if(username == "" || name == "" || email == "" || gender == "" || day == "" || month == "" || year == "" || user_type == "" || 
    password == "" || confirmPassword == ""){
        alert("Fill up all the information");
        return false;

    }else{

        // Picture Validation

        let validExt = ["jpeg", "jpg", "png"];
        let fileExt = file.substring(file.lastIndexOf('.')+1);
        let result = validExt.includes(fileExt);

        if(result == false){
            alert("Chosen Picture is not Valid! Choose JPEG, JPG or PNG only");
            return false;

        }else{
            if(file.size > 1024000){
                alert("Picture size must be lower than 1 MB!");
                return false;
            }
        }

        // Date of Birth Validation
        if((day > 0 && day <= 31) && (month > 0 && month <= 12) && (year >= 1900 && year <= 2021)){
            // nothing executes
            
        }else{
            alert("Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1900-2021)");
            return false;
        }

        // username validation
        if(username.length < 2){
            alert("User Name must contain at least two (2) characters!");
            return false;
        }

        let itr;
        for(itr = 0; itr < username.length; itr++){
            if((username[itr] >= 'a' && username[itr] <= 'z') || (username[itr] >= 'A' && username[itr] <= 'Z') 
            || (username[itr] >= 0 && username[itr] <= 9) || (username[itr] == '.') || (username[itr] == '-')){
                continue;
            }
            else{
                alert("Username can contain alpha numeric characters, period, dash or underscore only!");
                return false;
            }
        }

        // name validation
        if(name.length < 2){
            alert("Name must contain at least two (2) characters!");
            return false;
        }
        for(itr = 0; itr < name.length; itr++){
            if((name[itr] >= 'a' && name[itr] <= 'z') || (name[itr] >= 'A' && name[itr] <= 'Z') || (name[itr] == ' ')){
                continue;
            }
            else{
                alert("Name can only contain alphabets and white spaces!!!");
                return false;
            }
        }

        // password validation
        if(password == confirmPassword){
            if(password.length < 8){
                alert("Password must not be less than eight (8) characters!");
                return false;
            }
            
            let flag = false;
            for(itr = 0; itr < password.length; itr++){
                if(password[itr] == '@' || password[itr] == '#' || password[itr] == '$' || password[itr] == '%'){
                    flag = true;
                    break;
                }
            }
            if(flag == false){
                alert("Password must contain at least one of the special characters (@, #, $, %)");
                return false;
            }

        }else{
            alert("Passwords do not match!!");
            return false;
        }
        
        // passing the values to php with AJAX
        const xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/signupCheck.php', true);
	    // xhttp.setRequestHeader('Content-type', 'multipart/form-data');
        xhttp.send(formData);

        alert('Registration Done Successfully.');
    }
}