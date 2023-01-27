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
			<div class="search-container">
			</div>

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
	<div style="position: relative;"><button id="change_style"><img id="img_style" src="lune.png"></button></div>

	<?php
	/* Connexion à la base de données */

	use function PHPSTORM_META\type;

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'MagasinMarteau');
	if ($mysqli->connect_errno) {
		echo '<p>Échec lors de la connexion à MySQL : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error . ' </p>';
		exit;
	}

	/* Modification du jeu de résultats en utf8 */
	if (!$mysqli->set_charset('utf8')) {
		echo '<p>Erreur lors du chargement du jeu de caractères utf8 : ' . $mysqli->error . ' </p>';
		exit;
	}



	//Limitation de pages pour la query
	$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
	$per_page = 30;
	$start = ($page - 1) * $per_page;

	$query = "SELECT `idProduit`,`Nom`,`RefFabriquant`,`Description`,`Marque` FROM MagasinMarteau.produits LIMIT $start, $per_page";

	$liste_resultat = $mysqli->query($query)
		or die('<p>Échec lors de la consultation : (' . $mysqli->errno . ') ' . $mysqli->error . '</p>');

	$NbLignes = intval($mysqli->query('SELECT COUNT(*) FROM MagasinMarteau.produits')->fetch_array()[0]);

	$mysqli->close();
	$html = '
			<table>
				<caption>Produits disponibles en rayon</caption>
				<tr>
					<th>N° de produit</th>
					<th>Nom</th>
					<th>RefFabriquant</th>
					<th>Description</th>
					<th>Marque</th>
				</tr>';

	while (($ligne = $liste_resultat->fetch_assoc()) != NULL) {
		$html .= '
				<tr>
					<td>' . $ligne['idProduit'] . '</td>
					<td>' . $ligne['Nom'] . '</td>
					<td>' . $ligne['RefFabriquant'] . '</td>
					<td>' . $ligne['Description'] . '</td>
					<td>' . $ligne['Marque'] . '</td>
				</tr>';
	}
	$liste_resultat->close();
	$html .= '
			</table>';

	$total_pages = $NbLignes / $per_page;

	$html .= "<div class=\"pagination-dropdown\">
    <select id=\"page-select\">";
    for ($i = 1; $i <= $total_pages; $i++) {
        $html .= "<option value=$i>Page $i</option>";
	}
	$html .= "
    </select>
	</div>";

	echo $html;
	?>
	</div>
	



</body>
<script src="main.js"></script>

</html>