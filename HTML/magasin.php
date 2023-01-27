<?php
include 'index.php';
require __DIR__ . '/utils.php';
use function PHPSTORM_META\type;
$mysqli = db_connect();

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
$html .= '
		</table>';

$total_pages = $NbLignes / $per_page;
$liste_resultat->close();
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
<script src="js/magasin.js"></script>