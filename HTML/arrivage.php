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


	
	<form>
	<div id="SousTitreArrivage"> Mettre des produits en ligne :</div> <br>
		<label for="name">Nom :</label>
		<input type="text" id="name" name="name" autofocus ><br><br>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom"><br><br>

		<label for="function">Fonction :</label>
		<select id="function" name="function">
			<option value="electricien">Électricien</option>
			<option value="automaticien">Automaticien</option>
			<option value="automaticien">Conducteur de travaux</option>
			<option value="automaticien">Étude electrique</option>
			<option value="automaticien">Étude hydraulique</option>
		</select><br><br>

		<p>Information sur le produit :</p>

		<label for="ProductName">Nom :</label>
		<input type="text" id="ProductName" name="ProductName"  ><br><br>

		<label for="ProductRef">Référence :</label>
		<input type="text" id="ProductRef" name="ProductRef"><br><br>

		<label for="ProductDesc">Description :</label>
		<input type="text" id="ProductDesc" name="ProductDesc"><br><br>

		<label for="ProductMarq">Marque :</label>
		<input type="text" id="ProductMarq" name="ProductMarq"><br><br>


		<input type="submit" value="Envoyer">
	</form>





</body>
<script src="main.js"></script>

</html>