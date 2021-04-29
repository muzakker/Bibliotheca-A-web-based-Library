"use strict"

function searchPenalty(){
    const search = document.getElementById('penaltySearch').value;

    const xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/searchPenalty.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('search='+search);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}