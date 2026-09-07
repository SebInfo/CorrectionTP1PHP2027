<?php

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];

    echo "Bonjour " . $nom;
}

?>

<form method="post">

    <label>Nom :</label>
    <input type="text" name="nom">

    <button type="submit">Envoyer</button>

</form>