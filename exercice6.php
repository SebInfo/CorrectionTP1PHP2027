<?php

if (isset($_POST["produit"], $_POST["prix"], $_POST["quantite"])
    && !empty($_POST["produit"])
    && !empty($_POST["prix"])
    && !empty($_POST["quantite"])) {

    $produit = $_POST["produit"];
    $prix = $_POST["prix"];
    $quantite = $_POST["quantite"];

    $prixTotal = $prix * $quantite;

    echo "Commande : " . $quantite . " x " . $produit . "<br>";
    echo "Prix total : " . $prixTotal . " €<br><br>";
}

?>

<form method="post">

    <label>Produit :</label>
    <input type="text" name="produit">

    <br><br>

    <label>Prix :</label>
    <input type="number" name="prix">

    <br><br>

    <label>Quantité :</label>
    <input type="number" name="quantite">

    <br><br>

    <button type="submit">Commander</button>

</form>