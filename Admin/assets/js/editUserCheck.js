"use strict"

function validationEditUser(){

    // extracting the values from the form
    const name = document.forms['editUserForm']['name'].value;
    const email = document.forms['editUserForm']['email'].value;
    const gender = document.forms['editUserForm']['gender'].value;
    const day = document.forms['editUserForm']['dd'].value;
    const month = document.forms['editUserForm']['mm'].value;
    const year = document.forms['editUserForm']['yyyy'].value;
    const file = document.forms['editUserForm']['picture'].value;

    // validating the values
    if(name == "" || email == "" || gender == "" || day == "" || month == "" || year == "" || file == ""){
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

        return true;
    }
}