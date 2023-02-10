<?php
$cookie_name = "theme";
if (isset($_COOKIE[$cookie_name]))
	$cookie_value = $_COOKIE[$cookie_name];
else {
	$cookie_opts = array(
		'expires' => time() + (86400 * 30),
		'path' => '/',
		'secure' => true,
		'samesite' => 'None'
	);
	$cookie_value = "white";
	setcookie($cookie_name, $cookie_value, $cookie_opts);
}
?>

<!DOCTYPE html>
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link rel="shortcut icon" href="assets\goutte-deau.png">
	<?php
	if ($_COOKIE[$cookie_name] == 'white')
		echo "<link id=\"css_link\" rel='stylesheet' href=\"css/style_clair.css\">";
	else
		echo "<link id=\"css_link\" rel='stylesheet' href=\"css/style_sombre.css\">";
	?>
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
				<a href="utilisateur.php"><i class="fi fi-rr-user"></i>&emsp;Utilisateurs</a>
			</nav>
		</div>
		
	</header>
	<footer>
		<div style="position: relative;" class="ChangementStyle">
			<button id="change_style">
				<?php
				if (isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == 'white') //vérifie que la variable existe et si = a white applique le theme clair
					echo "<img id=\"img_style\" src=\"assets/lune.png\"/>";
				else
					echo "<img id=\"img_style\" src=\"assets/soleil.png\"/>";
				?>
			</button>
		</div>
	</footer>
	<script src="js/main.js"></script>
</body>
</html>