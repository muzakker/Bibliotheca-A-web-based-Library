"use strict"
const renewForm = document.getElementById("renewForm");
renewForm.addEventListener('renew', (e)=>{
    e.preventDefault();
    validation();
})

function validation(){
    
    const renewformData = new FormData(renewForm);

    // extracting the values from the form
    const username = document.forms['renewForm']['username'].value;
    const name = document.forms['renewForm']['name'].value;
    const email = document.forms['renewForm']['email'].value;
    const gender = document.forms['renewForm']['gender'].value;
    const user_type = document.forms['renewForm']['user_type'].value;
    

    

    // validating the values
    if(username == "" || name == "" || email == "" || gender == ""){
        alert("Fill up all the information");
        return false;

    }else{

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
        let itr;
        for(itr = 0; itr < name.length; itr++){
            if((name[itr] >= 'a' && name[itr] <= 'z') || (name[itr] >= 'A' && name[itr] <= 'Z') || (name[itr] == ' ')){
                continue;
            }
            else{
                alert("Name can only contain alphabets and white spaces!!!");
                return false;
            }
        }
;
        
        
        // passing the values to php with AJAX
        const xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/RmsCheck.php', true);
        xhttp.send(renewformData);

        alert('Renew Membership Registration Done Successfully.');
    }
}