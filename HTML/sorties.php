<?php include './index.php';?>
<form>
	<div id="SousTitreArrivage"> Mettre des produits en ligne :</div><br>
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
	<input type="text" id="ProductName" name="ProductName"><br><br>
	<label for="ProductRef">Référence :</label>
	<input type="text" id="ProductRef" name="ProductRef"><br><br>
	<label for="ProductDesc">Description :</label>
	<input type="text" id="ProductDesc" name="ProductDesc"><br><br>
	<label for="ProductMarq">Marque :</label>
	<input type="text" id="ProductMarq" name="ProductMarq"><br><br>
	<input type="submit" value="Envoyer">
</form>
