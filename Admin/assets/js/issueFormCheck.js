"use strict"

function validationIssue(){

    // extracting the values from the form
    const issueID = document.forms['issueForm']['issueID'].value;
    const bookname = document.forms['issueForm']['bookname'].value;
    const day1 = document.forms['issueForm']['dd1'].value;
    const month1 = document.forms['issueForm']['mm1'].value;
    const year1 = document.forms['issueForm']['yyyy1'].value;
    const day2 = document.forms['issueForm']['dd2'].value;
    const month2 = document.forms['issueForm']['mm2'].value;
    const year2 = document.forms['issueForm']['yyyy2'].value;

    if(issueID == "" || bookname == "" || day1 == "" || month1 == "" || year1 == "" || day2 == "" || month2 == "" || year2 == ""){
        alert("Fill up all the information");
        return false;

    }else{

        // Issue Date Validation
        if((day1 > 0 && day1 <= 31) && (month1 > 0 && month1 <= 12) && (year1 >= 1900 && year1 <= 2021)){
            // nothing executes
            
        }else{
            alert("Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1900-2021)");
            return false;
        }

        // Return Date Validation
        if((day2 > 0 && day2 <= 31) && (month2 > 0 && month2 <= 12) && (year2 >= 1900 && year2 <= 2021)){
            // nothing executes
            
        }else{
            alert("Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1900-2021)");
            return false;
        }

        return true;

    }

}