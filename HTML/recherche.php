<!DOCTYPE html>
<html>

<head>

	<link id="css_link" rel='stylesheet' href="css/style clair.css">
	<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<meta charset="utf-8">
	<meta name="Antonin Barbachou" content="Magasin et repérage produits">
	<meta name="description" content="Site web pour Roger Marteau.">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
	<title>Magasin marteau | Bienvenue</title>

</head>

<body>
	<header>

		<div id="block">
			<h1 id="titre1">MAGASIN MARTEAU HYDRAULIQUE ET ELECTRIQUE</h1>
			
		</div>
		<div>
			<nav class="SelectionPages">
				<div class="navicon">
					<div></div>
				</div>
				<a href="index.php"><i class="fi fi-sr-home"></i>&emsp;Acceuil</a>
				<a href="magasin.php"></i><i class="fi fi-sr-store-alt"></i>&emsp;Magasin</a>
				<a href="recherche.php"><i class="fi fi-br-search"></i>&emsp;Rechercher</a>
				<a href="arrivage.php"><i class="fi fi-bs-enter"></i>&emsp;Arrivage</a>
				<a href="sorties.php"><i class="fi fi-br-exit"></i>&emsp;Sorties</a>
			</nav>

		</div>

	</header>
	<div class="recherche">
		<h2>Produit à rechercher :</h2>
		<form method="get" action="recherche.php">
			<input name="search_field" type="text" placeholder="Rechercher..." autofocus>
			<input name="submit" type="submit" value="Rechercher" >
		</form>
	</div>

	<?php
	/* Connexion à la base de données */

	use function PHPSTORM_META\type;

	$mysqli = new mysqli('localhost', 'mysql', 'password', 'MagasinMarteau');
	if ($mysqli->connect_errno) {
		echo '<p>Échec lors de la connexion à MySQL : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error . ' </p>';
		exit;
	}

	/* Modification du jeu de résultats en utf8 */
	if (!$mysqli->set_charset('utf8')) {
		echo '<p>Erreur lors du chargement du jeu de caractères utf8 : ' . $mysqli->error . ' </p>';
		exit;
	}

	$keyword = $_GET["search_field"];
	if ($keyword != "")
	{
		$query = "SELECT * FROM MagasinMarteau.produits WHERE Nom LIKE '%" . $keyword . "%';";
		$result = $mysqli->query($query);
		$mysqli->close();

		if ($result->fetch_array() == NULL)
			echo "<p>Nous n'avons pas encore ce produit en stock.</p>";
		while (($line = $result->fetch_array()) != NULL)
			echo "<p>" . $line["Nom"] . "</p>";
	}
	?>
	<footer>
		<div style="position: relative;" class="ChangementStyle"><button id="change_style"><img id="img_style" src="assets/lune.png"></button></div>
	</footer>
	<script src="js/main.js"></script>
</body>
</html>