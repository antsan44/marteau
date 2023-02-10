<?php include './base.php'; ?>
<div class="recherche">
	<h2>Produit à rechercher :</h2>
	<form method="get" action="recherche.php">
		<input name="search_field" id="search_field" type="text" placeholder="Rechercher..." autofocus>
		<input name="submit" type="submit" value="Rechercher">
	</form>
</div>

<?php
require __DIR__ . '/utils.php';

use function PHPSTORM_META\type;

$mysqli = db_connect(); //appel pour connexion a la bdd
if (isset($_GET["search_field"])) {
	$keyword = $_GET["search_field"];
	if ($keyword != "") {
		$result = search($mysqli, $keyword);
		$mysqli->close();
		if (!$result->fetch_array())
			echo "<p>L'article n'est pas disponible pour le moment.</p>";
		while (($line = $result->fetch_array()) != NULL)
			echo "<p>" . $line["Nom"] . "</p>";
	}
}

?>
<script src="js/recherche.js"></script>