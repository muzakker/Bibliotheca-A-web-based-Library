"use strict"

function searchBook(){
    const search = document.getElementById('search').value;

    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/searchBook.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('search='+search);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}