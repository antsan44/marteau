<!DOCTYPE html>
<html>

<head>

	<link id="css_link" rel='stylesheet' href="style clair.css">
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


	<form method="POST" action="">
		Rechercher un mot : <input type="text" name="recherche">
		<input type="SUBMIT" value="Search!">
	</form>

</html>

<?php

$db_server = '127.0.0.1'; // Adresse du serveur MySQL
$db_name = 'MagasinMarteau';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server, $db_user_login, $db_user_pass, $db_name);


// Récupère la recherche
$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

// la requete mysql	
$q = $conn->query(
	"SELECT `Nom`, `RefFabriquant` FROM MagasinMarteau.produits
      WHERE Nom LIKE '%$recherche%'
      OR RefFabriquant LIKE '%$recherche%'
      LIMIT 10"
);

// affichage du résultat
while ($r = mysqli_fetch_array($q)) {
	echo 'Résultat de la recherche: ' . $r['Nom'] . ', ' . $r['RefFabriquant'] . ' <br />';
}
?>

</body>
<script src="main.js"></script>
<div style="position: relative;" class="ChangementStyle"><button id="change_style"><img id="img_style" src="lune.png"></button></div>

</html>