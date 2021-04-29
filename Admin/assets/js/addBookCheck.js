"use strict"

function validationAddBook(){

    // extracting the values from the form
    const bookID = document.forms['addBookForm']['bookID'].value;
    const bookname = document.forms['addBookForm']['bookname'].value;
    const category = document.forms['addBookForm']['category'].value;
    const author = document.forms['addBookForm']['author'].value;
    const day = document.forms['addBookForm']['dd'].value;
    const month = document.forms['addBookForm']['mm'].value;
    const year = document.forms['addBookForm']['yyyy'].value;
    const file = document.forms['addBookForm']['picture'].value;
    const price = document.forms['addBookForm']['price'].value;

    if(bookID == "" || bookname == "" || category == "" || day == "" || month == "" || year == "" || file == "" || author == "" || price == ""){
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
        if((day > 0 && day <= 31) && (month > 0 && month <= 12) && (year >= 1700 && year <= 2021)){
            // nothing executes
            
        }else{
            alert("Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1700-2021)");
            return false;
        }

        return true;
    }
    
}