<?php
	// Laadt de instellingen voor het verbinden met de database.
	require_once 'settings.php';

	// Controleer of er al een sessie is, anders start een sessie.
	if (session_status() == PHP_SESSION_NONE) {session_start();}

	/*
	 *	Controleer of er al verbinding is met de database,
	 *	zo niet maak verbinding
	 */
	function makeConnection() {
		static $pdo = false;
		if ($pdo) {return $pdo;}
		
		// Verbinding maken met de database
		$host     = DB_HOST;
		$dbname   = DB_NAME;
		$user     = DB_USER;
		$password = DB_PASS;
		$charset  = 'utf8mb4';

		// Hulpvariabelen voor het verbinden
		$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false,
		];

		// Maak een nieuwe database verbinding aan
		$pdo = new PDO($dsn, $user, $password, $options);
		$pdo->exec("SET sql_mode='traditional';");
		
		return $pdo;
	}

	function registreerBezoek($pagina) {
		// Haal alle bestaande pagina's op,
		$pdo = makeConnection();
		$ps = $pdo->prepare("SELECT url FROM statistieken");			
		$ps->execute();
		
		$pages = $ps->fetchAll();	
		foreach ($pages as $url) {
			foreach ($url as $page) {
				// Haal de gegevens van de bezochte pagina op,
				if (strpos($pagina, $page)) {
					$ps = $pdo->prepare(
						"SELECT * 
						 FROM statistieken
						 WHERE url = :url"
					);			
					$ps->execute([
						':url' => $page
					]);
					$row = $ps->fetch();				
					// verhoog het aantal bezoeken met 1,
					$bezoek = $row['aantal_bezoeken'] + 1;
					// update het aantal bezoeken & het tijdstip van het laatste bezoek.				
					$ps = $pdo->prepare(
						"UPDATE statistieken
						 SET aantal_bezoeken = :bezoek,
							 laatste_bezoek = CURRENT_TIMESTAMP
						 WHERE url = :url"
					);	
					$ps->execute([
						':bezoek' => $bezoek,
						':url' => $page
					]);				
				}
			}
		}
	}

	function getStats($pdo) {
		// haal alle gegevens op
		$ps = $pdo->prepare("SELECT * FROM statistieken
							 ORDER BY aantal_bezoeken DESC, 
									  laatste_bezoek DESC"
		);
		$ps->execute();	
		return $ps->fetchAll();
	}

	function resetStats($db) {
		/* 
		 * zet aantal_bezoeken naar 0
		 * en laatste_bezoek naar null
		 */
		$bezoek = 0;
		$laatste = null;
		
		$ps = $db->prepare(
			"UPDATE statistieken
			 SET aantal_bezoeken = :bezoek,
				 laatste_bezoek = :laatste"
		);	
		$ps->execute([
			':bezoek' => $bezoek,
			':laatste' => $laatste
		]);
	}
	// Toon gegevens van de database in een HTML-tabel
	function showTable($data) {
		$table = '<table class="php">
				  <tr>
					<th>pagina</th>
					<th>aantal bezoeken</th>
					<th>laatste bezoek</th>
				 </tr>';
		for ($i = 0; $i < count($data); $i++) {
			$table .= '<tr>
						<td><a href="'.$data[$i]["url"].'">'.$data[$i]["pagina"].'</a></td>
						<td>'.$data[$i]["aantal_bezoeken"].' keer</td>
						<td>'.$data[$i]["laatste_bezoek"].'</td>
					  </tr>';
		}
		$table .= '</table>';
		
		echo $table;
	}
?>