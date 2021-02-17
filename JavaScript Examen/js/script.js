/*
	Niet geheel optimaal:
	- bijna alle loops zijn hard gecodeerd
	- opdracht 7 beetje creatief gegaan
	- opdracht 9 kan zondermeer compacter
	- eventueel een window eventListener voor alle onclick events
	
	>> But if it works, it works <<
*/

// So it begins when the page has been loaded...
window.addEventListener('load', function(){
// Globale constanten
	const img = document.getElementsByTagName('img');			// opdracht 1 & 5
	const url = document.getElementsByTagName('a');				// opdracht 2
	const cell = document.getElementsByTagName('td');			// opdracht 4
	const btn = document.getElementById('knopvoorborder');		// opdracht 5
	const kleurBlok = document.getElementsByClassName('blok');	// opdracht 6
	const input = document.getElementsByTagName('input')[0];	// opdracht 7
	const iframe = document.getElementsByTagName('iframe')[0];	// opdracht 7
	const kleurBalk = document.getElementsByClassName('blok2');	// opdracht 8
	const p = document.getElementsByTagName('p');				// opdracht 9
	const kop = document.getElementsByTagName('h3');			// opdracht 9
	const mooi = document.getElementsByClassName('blok3 mooi');	// opdracht 10
	const voegToe = document.getElementById('voeg_plaats_toe'); // opdracht 11
	const newPlace = document.getElementById('nieuwe_plaats');	// opdracht 11
	const theList = document.getElementsByTagName('ol')[0];		// opdracht 11
	const opdr12 = document.getElementById('opdracht12');		// opdracht 12
	const persons = [											// opdracht 3
		{"firstname":"Nel", "lastname":"De Beer", "age":9, "location":"Weert"},
		{"firstname":"Bob", "lastname":"Janssen", "age":33, "location":"Eindhoven"},
		{"firstname":"Beatrix", "lastname":"Peperkamp", "age":76, "location":"Nijmegen"},
		{"firstname":"Frans", "lastname":"Vermeulen", "age":41, "location":"Rotterdam"},
		{"firstname":"Kaatje", "lastname":"verstappen", "age":23, "location":"Venlo"},
		{"firstname":"Japie", "lastname":"De Binck", "age":29, "location":"Amsterdam"}
	];
// opdracht 1
	// als er op het plaatje plaatje geklikt wordt
	img[5].addEventListener('click', function() {
		// haal de volledige datum op
		const d = new Date();
		// haal de dag op
		const dag = d.getDate();
		// haal de maand op
		const maand = (d.getMonth() + 1);
		// haal het jaar op
		const jaar = d.getFullYear();
		// geef de datum weer in een alert
		alert("De datum is "+dag+"-"+maand+"-"+jaar+".");
	});
// opdracht 2
	for (i = 0; i < 3; i++) {
		// als er op 1 van de "links" geklikt wordt
		url[i].addEventListener('click', function() {
			const doel = event.target.innerHTML;
			const pagina = event.target.id;
			// laat de user zijn keuze bevestigen
			const cnf = confirm("Weet u het zeker dat u naar "+doel+" wil gaan?");
			// indien keuze bevestigd ga naar de link pagina
			if (cnf == true) {
				window.location = pagina;
			}
		});
	};
// opdracht 3
	// vul de tabel met alle gegevens uit de array
	for (i = 0; i < persons.length; i++){
		document.getElementById("voornaam"+(i+1)).innerHTML = persons[i].firstname;
		document.getElementById("achternaam"+(i+1)).innerHTML = persons[i].lastname;
		document.getElementById("leeftijd"+(i+1)).innerHTML = persons[i].age;
		document.getElementById("woonplaats"+(i+1)).innerHTML = persons[i].location;
	}
// opdracht 4
	for (i = 0; i < 24; i++) {
		// als er op een cell geklikt wordt
		cell[i].addEventListener('click', function() {
			let doel = event.target.textContent;
			// geef een prompt weer
			let inhoud = prompt("Wat wilt u deze cell hebben?", "Vul hier uw tekst in");
			// als de iets is ingevuld, vervang dan inhoud van de cell hiermee
			if (inhoud != null) {
				this.innerHTML = inhoud;
			}
		});
	};	
// opdracht 5
	btn.addEventListener('click', function() {
		// als er op de button geklikt wordt geef deze de gevraagde border
		img[12].style.border = "5px solid orange";
	});
// opdracht 6
	for (i = 0; i < 3; i++) {
		// als er dubbel geklikt word op 1 van de blokken
		kleurBlok[i].addEventListener('dblclick', function(){
			// maak rgb aan
			var r = Math.floor(Math.random()*256);
			var g = Math.floor(Math.random()*256);
			var b = Math.floor(Math.random()*256);
			// verander de kleur van het blok met deze rgb
			event.target.style.backgroundColor = "rgb("+r+","+g+","+b+")";
		});
	}	
// opdracht 7
	// workaround i.v.m. lokaal draaien
	document.getElementsByTagName('input')[0].placeholder = "vul hier sliminict.html in";
	input.addEventListener('keyup', function() {
		// vervang de iframe source met de input
		iframe.src = input.value;
/*  
	X-frame-Options = SAMEORIGIN / DENY helpen niet mee voor een live version
	https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_iframe_src
	verander de src en de meeste pagina's weigeren de toegang
*/
	});
// opdracht 8
	for (i=0; i < 3; i++) {
		// als er op 1 van de blokken geklikt wordt
		kleurBalk[i].addEventListener('click', function() {
			// maak deze 50% transparant
			event.target.style.opacity = "0.5";
		});
	}
// opdracht 9
	for (i=2; i < 5; i++) {
		// verberg alle paragrafen
		p[i].style.display = "none";
	}
	for (i=0; i < 3; i++) {
		// als er op 1 van de 3 kopteksten wordt geklikt
		// bekijk of de bijbehorende paragraaf zichtbaar is of niet
		// indien onzichtbaar maar zichtbaar en visa versa
		kop[i].addEventListener('click', function() {
			if (event.target === kop[0]) {
				if (p[2].style.display === "none") {
					p[2].style.display = "block";
				} else {
					p[2].style.display = "none";
				}				
			} else if (event.target === kop[1]) {
				if (p[3].style.display === "none") {
					p[3].style.display = "block";
				} else {
					p[3].style.display = "none";
				}			
			} else if (event.target === kop[2]) {
				if (p[4].style.display === "none") {
					p[4].style.display = "block";
				} else {
					p[4].style.display = "none";
				}				
			}
		});
	}
// opdracaht 10
	for (i=0; i < 9; i++) {
		//als er op 1 van de blokken wordt geklikt
		mooi[i].addEventListener('click', function () {
			const move = document.createElement('div');
			const body = document.body;
			// maak een "onzichtbare" div aan 
			move.classList.add('space');
			move.style.width = "50px";
			move.style.height = "50px";
			move.style.cssFloat = "left";
			// plaats deze onderaan de pagina
			body.appendChild(move);
			// vervolgens plaats deze voor het geklikte blokje
			move.parentElement.insertBefore(move, event.target);
		});
	}
// opdracht 11
	// als er op de button geklikt wordt
	voegToe.addEventListener('click', function() {
		// en er is iets ingevuld
		if (newPlace.value.length > 0) {
			// maak een nieuw list item aan
			const newLi = document.createElement('li');
			// vul deze met de input
			newLi.textContent = newPlace.value;
			// plaats deze onderaan de lijst
			theList.appendChild(newLi);
			// verwijder de input
			newPlace.value = "";
		}
	});
// opdracht 12
	// maak de plugin div "netjes"
	opdr12.style.width = "900px";
	opdr12.style.border = "1px solid grey";
	// activeer de plug-in zoals gevraagd and more
	new Glide('.glide', {
		// laat de plaatjes rond gaan
		type: 'carousel',
		// iedere 3 sec doorschuiven (in ms)
		autoplay: 3000,
		// pauze als de muis op de glide staat
		hoverpause: true,
		// ruimte tussen de plaatjes (in px)
		gap: 5,
		// begin bij het eerste plaatje
		startAt: 0,
		// laat altijd 3 plaatjes zien in de glide
		perView: 3
	}).mount()
// script load control
	console.log("SCRIPT LOADED");
});
	