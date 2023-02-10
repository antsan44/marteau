<?php
	$db_name = "magasinmarteau";
	function db_connect($user = "root", $passwd = "", $host = "127.0.0.1")
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

	function addProduct($mysqli = NULL, $nom, $RefFabriquant, $Description, $Marque, $Emplacement, $Quantitee)
	{
		if (!$mysqli || $nom == "" || $RefFabriquant == "" || $Description == "" || $Marque == "" || $Emplacement == "" || $Quantitee == "" )
			return;
		$query = "INSERT INTO ". $GLOBALS['db_name'] .".produits (Nom, RefFabriquant, Description, Marque, Emplacement, Quantitee) VALUES (\"". $nom ."\", \"". $RefFabriquant ."\", \"". $Description ."\",\"". $Marque ."\", \"". $Emplacement ."\", \"". $Quantitee ."\");";
		$mysqli->query($query);
	}

	function deleteproduct($mysqli = NULL, $keyword)
	{	
		if ($keyword == "" || !$mysqli)
			return;
	  	$query = "DELETE FROM `produits` WHERE `produits`.`idProduit` = ".$keyword." ;";
		$mysqli->query($query);
	}
?>