<?php
	require __DIR__ . "/utils.php";

	$mysqli = db_connect();
	//Get the current time
	date_default_timezone_set('Europe/Paris');
	$time = date("m/d/Y h:i:s a", time());
	$user = $_POST['SelectUser']; //L'id de l'utilisateur selectione
	$product = $_POST['SelectProduct']; //L'id du produit selectione
	$quantity = $_POST['quantity']; //Le nombre de produit selectione

	if (array_key_exists("add_p", $_POST))
	{
		//Si tu as appuye sur Ajouter produit
		echo "Bonsoir momo !";
		echo $time;
		echo $user;
		echo $product;
		echo $quantity;

	}
	else if (array_key_exists('remove_p', $_POST))
	{
		//Sinon si tu as appuye sur Enlever produit 
		echo "Dinde momo !";
		echo $time;
		echo $user;
		echo $product;
		echo $quantity;
	}
	$mysqli->close();

	//redirect to sorties.php file when finished
	header("Location: /sorties.php", true, 302);
	exit();
?>