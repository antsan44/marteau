<?php include './base.php';?>
<form method="post" action="sortie_action.php">
	<?php
		require __DIR__ . '/utils.php';

		$mysqli = db_connect();
		$users = $mysqli->query("SELECT * FROM ". $GLOBALS['db_name']. '.utilisateurs;');
		echo "<select name=\"SelectUser\">";
		while (($user = $users->fetch_array()))
			echo "<option value=\"".$user['idUtilisateur']."\">".$user['Nom']." ".$user['Prenom']." (".$user['FONCTION'].")</option>";
		echo "</select>";

		$products = $mysqli->query("SELECT * FROM ".$GLOBALS['db_name'].".produits;");
		echo "<select name=\"SelectProduct\">";
		while (($product = $products->fetch_array()))
			echo "<option value='" . $product['idProduit'] . "'>" . $product['Nom'] . " " . $product['RefFabriquant'] ." (Qte. ".$product['QtteProduit'].")</option>";
		echo "</select>";
	?>
	<div>
		<button type="button" id="remove">&#45;</button>
		<input type="text" name="quantity" id="quantity" value="1">
		<button type="button" id="add">&#43;</button>
	</div>
	<input type="submit" name="add_p" value="Ajouter Produit">
	<input type="submit" name="remove_p" value="Enlever Produit">
</form>
<script src="js/sortie.js"></script>