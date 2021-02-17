<?php
	require_once 'php/functions.php';
	
	registreerBezoek($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<?php include 'php/head.php'; ?>
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
				<div>
					<figure>
						<img src="images/eschwin.jpg">
						<figcaption>Fotograferen in Zoo Veldhoven</figcaption>
					</figure>
				</div>
				<h2>Mijn Profiel:</h2>
				<table>
					<tr>
						<th>Voornaam:</th>
						<th>Achternaam:</th>
						<th>Geboortedatum:</th>
						<th>E-mail adres:</th>
					</tr>
					<tr>
						<td>Eschwin</td>
						<td>van Loon</td>
						<td>26 juni 1983</td>
						<td><a href="mailto:eschwinvanloon@tele2.nl">eschwinvanloon@tele2.nl<a></td>
					</tr>
				</table>
				<h2 class="htmlCss">Mijn vaardigheden:</h2>
				<ul class="htmlCss">
					<li class="unorderd"> HTML</li>
					<li class="unorderd"> CSS</li>
					<li class="unorderd"> JavaScript</li>
					<li class="unorderd"> PHP</li>
					<li class="unorderd"> SQL</li>
					<li class="unorderd"> OOP</li>
					<li class="unorderd"> AJAX</li>
					<li class="unorderd"> Laravel</li>
				</ul>
				<h2 class="htmlCss">Mijn hobbies:</h2>
				<ol class="htmlCss">
					<li>Aikido</li>
					<li>Darten</li>
					<li>Fotografie</li>
				</ol>
			</main>
			<footer>
				<?php include 'php/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>