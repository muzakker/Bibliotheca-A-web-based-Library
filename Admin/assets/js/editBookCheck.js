"use strict"

function validationEditBook(){

    // extracting the values from the form
    const bookname = document.forms['editBookForm']['bookname'].value;
    const category = document.forms['editBookForm']['category'].value;
    const author = document.forms['editBookForm']['author'].value;
    const day = document.forms['editBookForm']['dd'].value;
    const month = document.forms['editBookForm']['mm'].value;
    const year = document.forms['editBookForm']['yyyy'].value;
    const file = document.forms['editBookForm']['picture'].value;
    const price = document.forms['editBookForm']['price'].value;

    if(bookname == "" || category == "" || day == "" || month == "" || year == "" || file == "" || author == "" || price == ""){
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

        // Published Date Validation
        if((day > 0 && day <= 31) && (month > 0 && month <= 12) && (year >= 1900 && year <= 2021)){
            // nothing executes
            
        }else{
            alert("Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1900-2021)");
            return false;
        }

        return true;
    }
    
}