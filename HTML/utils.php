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
		$query = "SELECT * FROM ". $GLOBALS['db_name'] .".produits WHERE Nom LIKE '%". $keyword ."%';";
		$result = $mysqli->query($query);
		return ($result);
	}
?>