<?php

require "connexion.php";

$sql = "SELECT * FROM produit";

$stmt = $pdo->query($sql);

$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($produits as $produit) {
    echo $produit["nom"] . " - "
        . $produit["prix"] . " € - Stock : "
        . $produit["stock"] . "<br>";
}