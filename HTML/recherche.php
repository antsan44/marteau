<?php include './index.php'; ?>
<div class="recherche">
	<h2>Produit à rechercher :</h2>
	<form method="get" action="recherche.php">
		<input name="search_field" id="search_field" type="text" placeholder="Rechercher..." autofocus>
<<<<<<< HEAD
		<input name="submit" type="submit" value="Rechercher">
=======
		<input name="submit" type="submit" value="Rechercher" >
>>>>>>> 33c38649147b7da79cdc47befa0e9ea724a8c3e3
	</form>
</div>

<?php
require __DIR__ . '/utils.php';
<<<<<<< HEAD

use function PHPSTORM_META\type;
$mysqli = db_connect(); //appel pour connexion a la bdd
$keyword = $_GET["search_field"];	
if ($keyword != "") {
	$result = search($mysqli, $keyword);
	$mysqli->close();
	if (!$result->fetch_array())
		echo "<p>L'article n'est pas disponible pour le moment.</p>";
=======
use function PHPSTORM_META\type;
$mysqli = db_connect();
$keyword = $_GET["search_field"];
if ($keyword != "")
{
	$result = search($mysqli, $keyword);
	$mysqli->close();
	if (!$result->fetch_array())
		echo "<p>Nous n'avons pas encore cet article en stock.</p>";
>>>>>>> 33c38649147b7da79cdc47befa0e9ea724a8c3e3
	while (($line = $result->fetch_array()) != NULL)
		echo "<p>" . $line["Nom"] . "</p>";
}
?>
<script src="js/recherche.js"></script>