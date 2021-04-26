"use strict"
const paymentForm = document.getElementById("paymentForm");
paymentForm.addEventListener('checkout', (e)=>{
    e.preventDefault();
    validation();
})

function validation(){
    
    const paymentformData = new FormData(paymentForm);

    // extracting the values from the form
    
    const name = document.forms['paymentForm']['name'].value;
    const email = document.forms['paymentForm']['email'].value;
    const address = document.forms['paymentForm']['address'].value;
    const account_number = document.forms['paymentForm']['accountnumber'].value;
    const password = document.forms['paymentForm']['password'].value;

    

    // validating the values
    if( name == "" || email == "" || address == "" || account_number == "" || password == ""){
        alert("Fill up all the information");
        return false;

    }else{


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
;
        
        
        // passing the values to php with AJAX
        const xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/paymentCheck.php', true);
        xhttp.send(paymentformData);

        alert('payment Done Successfully.');
    }
}