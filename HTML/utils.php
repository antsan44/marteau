<?php
	$db_name = "MagasinMarteau";
	function db_connect($user = "mysql", $passwd = "password", $host = "127.0.0.1")
	{
		try {
			$mysqli = new mysqli($host, $user, $passwd, $GLOBALS['db_name']);
			$mysqli->set_charset('utf8');
			return ($mysqli);
		} catch (Exception $e) {
			echo "<p>Error with the database: ". $e->getMessage() ."</p>";
			exit ;
		}
	}

	function search($mysqli = NULL, $keyword)
	{	
		if ($keyword == "" || !$mysqli)
			return (NULL);
		$query = "	SELECT `Nom`, `RefFabriquant`, `idEmplacement` FROM MagasinMarteau.produits
      WHERE Nom LIKE '%$keyword%' OR RefFabriquant LIKE '%. $keyword .%' LIMIT 15";
		$result = $mysqli->query($query);
		return ($result);
	}

	function deleteuser($mysqli = NULL, $keyword)
	{	
		if ($keyword == "" || !$mysqli)
			return;
	  	$query = "DELETE FROM " .$GLOBALS['db_name'] .".utilisateurs WHERE IdUtilisateur=".$keyword.";";
		$mysqli->query($query);
	}

	function adduser($mysqli = NULL, $nom, $prenom, $fonction)
	{
		if (!$mysqli || $nom == "" || $prenom == "" || $fonction == "")
			return;
		$query = "INSERT INTO ". $GLOBALS['db_name'] .".utilisateurs (Nom, Prenom, Fonction) VALUES (\"". $nom ."\", \"". $prenom ."\", \"". $fonction ."\");";
		$mysqli->query($query);
	}
?>