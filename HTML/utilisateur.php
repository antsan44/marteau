<?php include './index.php'; ?>

<form method="post">
    <div id="AddUser">
        <div id="SousTitreArrivage"> Ajouter un utilisateur :</div><br>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" autofocus><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="function">Fonction :</label>
        <select id="function" name="function">
            <option value="Électricien">Électricien</option>
            <option value="Automaticien">Automaticien</option>
            <option value="Tuyauteu">Tuyauteur</option>
            <option value="Soudeur">Soudeur</option>
            <option value="Conducteur de travaux">Conducteur de travaux</option>
            <option value="Étude electrique">Étude electrique</option>
            <option value="Étude hydraulique">Étude hydraulique</option>
        </select><br><br>
        <input name="Adduser" type="submit" value="Ajouter"><br><br>
    </div>
    <div id="DelUser">
        <div id="SousTitreArrivage"> Supprimer un utilisateur :</div><br>

        <?php

        require __DIR__ . '/utils.php';

        use function PHPSTORM_META\type;

        $mysqli = db_connect();

        $query = "SELECT * FROM ". $GLOBALS['db_name'] .".utilisateurs;";
        $liste_resultat = $mysqli->query($query);


        echo "<select id='SelectUser' name='SelectUser'>";
        while (($user = $liste_resultat->fetch_assoc()) != NULL) {
            echo "<option value='" . $user['IdUtilisateur'] . "'>" . $user['Nom'] . " " . $user['Prenom'] . "</option>";
        }
        echo "</select>";


        if(array_key_exists('Deluser',$_POST))
		{
			// If you want to delete a user
           deleteuser($mysqli, $_POST['SelectUser']);
		   echo "<meta http-equiv='refresh' content='0'>";
		}
		else if (array_key_exists('Adduser', $_POST))
		{
			//else if you want to add a user
			adduser($mysqli, $_POST['name'], $_POST['prenom'], $_POST['function']);
		}
		$mysqli->close();
        ?>
        <input name="Deluser" type="submit" value="Supprimer"><br><br>
    </div>


</form>