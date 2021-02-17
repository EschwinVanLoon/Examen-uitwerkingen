<?php
	require_once 'functions.php';

	$db = makeConnection();
	$stats = getStats($db);

	showTable($stats);
?>