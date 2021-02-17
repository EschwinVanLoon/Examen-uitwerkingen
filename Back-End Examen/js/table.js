window.addEventListener("load", function() {				
	const request = new XMLHttpRequest();
	// maak een nieuw XMLHttpRequest aan
	request.onreadystatechange = function() {
		// als het request is afgehandeld geef deze weer in 'table'
		if (request.readyState == 4 && request.status == 200) {
			document.getElementById('table').innerHTML =
			request.responseText;
		}
	};
	// verzend het verzoek naar de bijbehorende php pagina
	request.open("GET", "php/showTable.php", true);
	request.send();

	document.getElementById("reset").addEventListener("click", function() {
		const request = new XMLHttpRequest();
		// maak een nieuw XMLHttpRequest aan
		request.onreadystatechange = function() {
			// als het request is afgehandeld geef deze weer in 'table'
			if (request.readyState == 4 && request.status == 200) {
				document.getElementById('table').innerHTML =
				request.responseText;
			}
		};
		// verzend het verzoek naar de bijbehorende php pagina
		request.open("POST", "php/reset.php", true);
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");				
		request.send();
	});
});		