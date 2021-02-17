<?php
	require_once 'php/functions.php';
	
	registreerBezoek($_SERVER['PHP_SELF']);

	spl_autoload_register(function($classname) {
		// Bestandsnaam bepalen
		$filename= 'classes/'.str_replace('\\', '/', $classname).'.php';
		
		// Als het bestand bestaat laadt het in
		if(file_exists($filename)) {
			include_once $filename;
		}
	});
	
	$diskette = new Diskette();
	$lp = new LongPlay();
	$cdr = new CompactDiscRecordable();
	$bluray = new BluRay();
	$cassette = new CassetteTape();
	
	$mediums = [$diskette, $lp, $cdr, $bluray, $cassette];
	$html = '';
	for ($i = 0; $i < count($mediums); $i++) {
		$html .= $mediums[$i]->presentSpecs();
	}
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
				<?= $html ?>
			</main>
			<footer>
				<?php include 'php/footer.php'; ?>
			</footer>
		</div>
	</body>
</html>