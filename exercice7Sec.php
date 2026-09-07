<?php

if (isset($_POST['nom'])) {

    $nom = trim($_POST['nom']);

    $nom = htmlspecialchars(
        $nom,
        ENT_QUOTES,
        'UTF-8'
    );

    echo "Bonjour " . $nom;
}

?>

<form method="post">

    <label>Nom :</label>
    <input type="text" name="nom">

    <button type="submit">Envoyer</button>

</form>