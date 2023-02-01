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
            <option value="electricien">Électricien</option>
            <option value="automaticien">Automaticien</option>
            <option value="automaticien">Tuyauteur</option>
            <option value="automaticien">Soudeur</option>
            <option value="automaticien">Conducteur de travaux</option>
            <option value="automaticien">Étude electrique</option>
            <option value="automaticien">Étude hydraulique</option>
        </select><br><br>
        <input type="submit" value="Ajouter"><br><br>
    </div>
    <div id="DelUser">
        <div id="SousTitreArrivage"> Supprimer un utilisateur :</div><br>

        <?php

        require __DIR__ . '/utils.php';

        use function PHPSTORM_META\type;

        $mysqli = db_connect();


        $query = "SELECT * FROM magasinmarteau.utilisateurs;";
        $liste_resultat = $mysqli->query($query)
            or die('<p>Échec lors de la consultation : (' . $mysqli->errno . ') ' . $mysqli->error . '</p>');


        echo "<select id='SelectUser' name='SelectUser'>";
        while (($user = $liste_resultat->fetch_assoc()) != NULL) {
            echo "<option value='" . $user['idUtilisateur'] . "'>" . $user['Nom'] . " " . $user['Prenom'] . "</option>";
        }
        echo "</select>";

        if(array_key_exists('Deluser',$_POST)){
           deleteuser($mysqli, $_POST['SelectUser']);
           echo "<meta http-equiv='refresh' content='0'>";
        }


        ?>
        <input name="Deluser" type="submit" value="Supprimer"><br><br>
    </div>


</form>