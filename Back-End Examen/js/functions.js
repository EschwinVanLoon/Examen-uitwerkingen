// opdracht 1 & 3
window.addEventListener('click', function(){
	// opdracht 1
	const header = document.getElementsByTagName("header");
	const resultaat = document.getElementById('result');
	const target = event.target;
	const veranderTekst = 'Verander header achtergrond';
	// als er op de 'change' button geklikt wordt
	if (target.id === 'change') {
		/*
		 * en de tekst ervan is 'Verander header achtergrond'  
		 * verander dan de header achtergrond afbeelding naar 'header3.jpg'
		 * plus verander de button tekst naar 'Reset header achtergrond'
		 */
		if (target.textContent === veranderTekst) {
			header[0].style.backgroundImage = 'url("images/header3.jpg")';
			target.textContent = 'Reset header achtergrond';
		/*
		 * anders verander dan de header achtergrond afbeelding naar 'header4.jpg'
		 * plus verander de button tekst naar 'Verander header achtergrond'
		 */
		}else {
			header[0].style.backgroundImage = 'url("images/header4.jpg")';			
			target.textContent = veranderTekst;
		}
	}
	// opdracht 3
	// als er op de 'check' button geklikt wordt
	if (target.id === 'check') {
		let correct = 0;
		const antwoorden = ['aikido1', 'darts3', 'foto2'];
		// loop door de vragen heen
		for (let i = 0; i < antwoorden.length; i++) {
			// controleer of er een antwoord gekozen is
			if (document.getElementById(antwoorden[i]).checked) {
				// verhoog voor ieder goed aangevinkt antwoord 'correct'
				correct++;
			}
		}
		// geef in resultaat de uitslag weer
		resultaat.innerHTML = correct+' van 3 vragen goed beantwoord';
	}
});
// opdracht 2
window.addEventListener('keyup', function(){
	const cheerText = document.getElementById('cheerAll').value;
	const yell = document.getElementById('yellAll');
	let   html = '';
	// controleer of er iets is ingevuld in 'cheerAll'
	if (cheerText.length > 0) {
		// voor ieder ingevuld character
		for (let i = 0; i < cheerText.length; i++) {
			// geef de letter weer in een cheer
			html += '<p class="javaScript">We hebben een &quot;'+cheerText[i]+'&quot;!<p>';
		}
		// geef de volledige input weer onder de cheers
		html += '<p class="javaScript">&quot;'+cheerText+'&quot;<p>';
	} else {
		// geef niets weer als de input leeg is
		html = '';
	}
	// geef de html tekst weer	
	yell.innerHTML = html;
// opdracht 2.9	
	const capsOnly = 'QWERTYUIOPASDFGHJKLZXCVBNM';
	const yellCaps = document.getElementById('yellCaps');
	let   cheerCaps = document.getElementById('cheerCaps');
	let   cheerCapsText = '';
	let   htmlCaps = '';
	
	// controleer of er iets is ingevuld in 'cheerCaps'
	if (cheerCaps.value.length > 0) {
		// voor ieder ingevuld character
		for (let i = 0; i < cheerCaps.value.length; i++) {
			/*
			 * als het ingevulde character een hoofdletter is,
			 * voeg deze toe aan de 'cheerCapsText'
			 */
			if (capsOnly.includes(cheerCaps.value[i])) {
				cheerCapsText += cheerCaps.value[i];
			}
		}		
	}
	// als de 'cheerCapsText' minimaal 1 character bevat
	if (cheerCapsText.length > 0) {	
		for (let i = 0; i < cheerCapsText.length; i++) {
			// geef de letter weer in een cheer
			htmlCaps += '<p class="javaScript">We hebben een &quot;'+cheerCapsText[i]+'&quot;!<p>';
		}
		// geef de volledige input weer onder de cheers
		htmlCaps += '<p class="javaScript">&quot;'+cheerCapsText+'&quot;<p>';
	} else {
		// geef niets weer als de input leeg is
		htmlCaps = '';
	}
	// geef de html tekst weer	
	yellCaps.innerHTML = htmlCaps;
// opdracht 2.10	
	const extra = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';
	const yellExtra = document.getElementById('yellExtra');
	let   cheerExtra = document.getElementById('cheerExtra');
	let   cheerExtraText = '';
	let   htmlExtra = '';
		
	// controleer of er iets is ingevuld in 'cheerExtra'
	if (cheerExtra.value.length > 0) {
		// voor ieder ingevuld character
		for (let i = 0; i < cheerExtra.value.length; i++) {
			/*
			 * als het ingevulde character een :
			 * hoofdletter, kleine letter of een cijfer is
			 * voeg deze toe aan de 'cheerExtraText'
			 */
			if (extra.includes(cheerExtra.value[i])) {
				cheerExtraText += cheerExtra.value[i];
			}
		}		
	}
	// als de 'cheerExtraText' minimaal 1 character bevat
	if (cheerExtraText.length > 0) {	
		for (let i = 0; i < cheerExtraText.length; i++) {
			// geef de letter weer in een cheer
			htmlExtra += '<p class="javaScript">We hebben een &quot;'+cheerExtraText[i]+'&quot;!<p>';
		}
		// geef de volledige input weer onder de cheers
		htmlExtra += '<p class="javaScript">&quot;'+cheerExtraText+'&quot;<p>';
	} else {
		// geef niets weer als de input leeg is
		htmlExtra = '';
	}
	// geef de html tekst weer
	yellExtra.innerHTML = htmlExtra;
});