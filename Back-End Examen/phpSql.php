<?php
	require_once 'php/functions.php';
	
	registreerBezoek($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="nl">
	<head>
		<?php include 'php/head.php'; ?>
		<script src="js/table.js"></script>
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
				<h2 class="php">Opdracht 2:</h2>
				<h3 class="php">Website statistieken</h3>
				<div id='table'></div>
				<form method="post">
					<input id="reset" type="button" value="Statistieken terugzetten">
				</form>
			</main>
			<footer>
				<?php include 'php/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>