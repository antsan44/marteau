<?php include './index.php'; ?>
<form method="post">
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