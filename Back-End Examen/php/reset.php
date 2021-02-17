<?php
	require_once 'functions.php';
	
	$db = makeConnection();
	$data = resetStats($db);
	$data = getStats($db);

	showTable($data);
?>