<?php include './index.php'; ?>
<form method="post">
	<div id="addProducts">
		<p>Ajouter un produit :</p>
		<label for="ProductName">Nom :</label>
		<input type="text" id="ProductName" name="ProductName"><br><br>
		<label for="ProductRef">Référence :</label>
		<input type="text" id="ProductRef" name="ProductRef"><br><br>
		<label for="ProductDesc">Description :</label>
		<input type="text" id="ProductDesc" name="ProductDesc"><br><br>
		<label for="ProductMarq">Marque :</label>
		<input type="text" id="ProductMarq" name="ProductMarq"><br><br>
	</div>
	<div id="DelProduct">
		<div id="SousTitreArrivage"> Supprimer un produit :</div><br>

		<?php

		require __DIR__ . '/utils.php';

		use function PHPSTORM_META\type;

		$mysqli = db_connect();

		$query = "SELECT * FROM " . $GLOBALS['db_name'] . ".produits;";
		$liste_resultat = $mysqli->query($query);


		echo "<select id='SelectProduct' name='SelectProduct'>";
		while (($user = $liste_resultat->fetch_assoc()) != NULL) {
			echo "<option value='" . $user['idProduits'] . "'>" . $user['Nom'] . " " . $user['RefFabriquant'] . "</option>";
		}
		echo "</select>";


		if (array_key_exists('DelProduct', $_POST)) {
			// If you want to delete a user
			deleteproduct($mysqli, $_POST['SelectProduct']);
			echo "<meta http-equiv='refresh' content='0'>";
		} else if (array_key_exists('Adduser', $_POST)) {
			//else if you want to add a user
			adduser($mysqli, $_POST['name'], $_POST['prenom'], $_POST['function']);
			echo "<meta http-equiv='refresh' content='0'>";
		}
		$mysqli->close();
		?>
		<input name="DelProduct" type="submit" value="Supprimer"><br><br>
	</div>
</form>