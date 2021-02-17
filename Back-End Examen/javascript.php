<?php
	require_once 'php/functions.php';
	
	registreerBezoek($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<?php include 'php/head.php'; ?>
		<script src="js/functions.js"></script>
	</head>
	<body>
		<div id="container">
			<header>
				<?php include 'php/header.php'; ?>
			</header>
			<nav>
				<?php include 'php/menu.php'; ?>
			</nav>
			<main>
				<h2 class="javaScript">Opdracht 1:</h2>
				<button id="change">Verander header achtergrond</button>
				<h2 class="javaScript">Opdracht 2:</h2>
				<label class="javaScript" for="cheerAll">Cheer:</label>
				<input type="text" id="cheerAll" name="cheerAll" placeholder="Let's cheer all!">
				<div class="javaScript" id='yellAll'></div>
				<h2 class="javaScript">Opdracht 2.9:</h2>
				<label class="javaScript" for="cheerCaps">Cheer:</label>
				<input type="text" id="cheerCaps" name="cheerCaps" placeholder="Let's cheer caps only!">
				<div class="javaScript" id='yellCaps'></div>
				<h2 class="javaScript">Opdracht 2.10:</h2>
				<label class="javaScript" for="cheerExtra">Cheer:</label>
				<input type="text" id="cheerExtra" name="cheerExtra" placeholder="Let's cheer 3XtRa!">
				<div class="javaScript" id='yellExtra'></div>
				<h2 class="javaScript">Opdracht 3:</h2>
				<fieldset>
					<legend>Vraag 1:</legend>
					<h4>Wie is de grondlegger van Aikido?</h4>
					<input type="radio" id="aikido1" name="quiz1">
					<label for="aikido1">Morihei Ueshiba</label>
					<input type="radio" id="aikido2" name="quiz1">
					<label for="aikido2">Jigoro Kano</label>
					<input type="radio" id="aikido3" name="quiz1">
					<label for="aikido3">Gichin Funakoshi</label>
					<input type="radio" id="aikido4" name="quiz1">
					<label for="aikido4">Minoru Mochizuki</label>
				</fieldset>
				<fieldset>
					<legend>Vraag 2:</legend>
					<h4>Wie heeft de meeste Premier League Darts titels?</h4>
					<input type="radio" id="darts1" name="quiz2">
					<label for="darts1">Michael van Gerwen</label>
					<input type="radio" id="darts2" name="quiz2">
					<label for="darts2">Gary Anderson</label>
					<input type="radio" id="darts3" name="quiz2">
					<label for="darts3">Phil Taylor</label>
					<input type="radio" id="darts4" name="quiz2">
					<label for="darts4">Raymond van Barneveld</label>
				</fieldset>
				<fieldset>
					<legend>Vraag 3:</legend>
					<h4>Wie was de overall natuur fotograaf van het jaar in 2019?</h4>
					<input type="radio" id="foto1" name="quiz3">
					<label for="foto1">Mohammad Murad</label>
					<input type="radio" id="foto2" name="quiz3">
					<label for="foto2">Csaba Daroczi</label>
					<input type="radio" id="foto3" name="quiz3">
					<label for="foto3">Frutos Egea</label>
					<input type="radio" id="foto4" name="quiz3">
					<label for="foto4">Peter Cech</label><br>
				</fieldset>
				<button id="check">Controleer</button>
				<span id="result"></span>
			</main>
			<footer>
				<?php include 'php/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>