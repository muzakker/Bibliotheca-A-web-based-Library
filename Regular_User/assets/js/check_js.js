"use strict";

function getName(){
			const name1 = document.getElementById('Username').value;

			if(name1 == ""){
				document.getElementById('Uname').innerHTML = "invalid data";
			}
			else{
				if (name1.length <= 2) {
				document.getElementById('Uname').innerHTML = "Required Atleast three character.";
					}
			else{
			 if (isLetter(name1.charAt(0)) === false) {
   				 document.getElementById('Uname').innerHTML = "First letter is not character.</br>";
  			}else{
  				document.getElementById('Uname').innerHTML = "Username";

  			}
			}
			}
		}
function isLetter(c) {
 			 return c.toLowerCase() != c.toUpperCase();}

 function getFullName(){
			const name2 = document.getElementById('FullName').value;

			if(name2 == ""){
				document.getElementById('Fname').innerHTML = "invalid data";
			}else{
			if(name2.length <= 2){
				document.getElementById('Fname').innerHTML = "Required Atleast three  character.";
			}
			else{
			 if (isLetter(name2.charAt(0)) === false) {
   				 document.getElementById('Fname').innerHTML = "First letter is not character.</br>";
  			}else{
  				document.getElementById('Fname').innerHTML = "FullName";

  			}
			}
		}
		}
function isLetter(c) {
 			 return c.toLowerCase() != c.toUpperCase();}



function ValidateEmail() 
{
	const email = document.getElementById('email').value;

			if(email == ""){
				document.getElementById('e').innerHTML = "Email missing";
			}else{
			if(email.length <= 2){
				document.getElementById('e').innerHTML = "Invalid Email.";
			}
			else{
			 if (email.indexOf("@") == -1){
   				 document.getElementById('e').innerHTML = "@ is missing.</br>";
  			}else{
  				document.getElementById('e').innerHTML = "Email";

  			}
			}
		}
}

function ValidateRequestforBookName() 
{
	const rbookName = document.getElementById('RbookName').value;

			if(rbookName == ""){
				document.getElementById('rbname').innerHTML = "Invalid Book Name";
			}
			else{
  				document.getElementById('rbname').innerHTML = "Book Name";}
			
		
}
function ValidateRequestforAuthorName() 
{
	const rauthorName = document.getElementById('rauthorName').value;

			if(rauthorName == ""){
				document.getElementById('an').innerHTML = "Invalid Author Name";
			}
			else{
  				document.getElementById('an').innerHTML = "Book Name";}
			
		
}
function ValidateReturnBookName() 
{
	const rbokName = document.getElementById('returnBookName').value;

			if(rbokName == ""){
				document.getElementById('bn').innerHTML = "Invalid Book Name";
			}
			else{
  				document.getElementById('bn').innerHTML = "Book Name";}
}

function ValidateReviewBookName() 
{
	const rboookName = document.getElementById('rbookName').value;

			if(rboookName == ""){
				document.getElementById('rbn').innerHTML = "Invalid Book Name";
			}
			else{
  				document.getElementById('rbn').innerHTML = "Book Name";}
}

function ValidateAuthorName() 
{
	const authorName = document.getElementById('rAuthorName').value;

			if(authorName == ""){
				document.getElementById('atn').innerHTML = "Invalid Book Name";
			}
			else{
  				document.getElementById('atn').innerHTML = "Author Name";}
}