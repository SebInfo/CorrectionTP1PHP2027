<?php

$produits = [
    "Clavier" => 49.90,
    "Souris"  => 29.90,
    "Écran"   => 189.90,
    "Webcam"  => 79.90
];

echo "<h3>Tous les produits</h3>";

foreach ($produits as $produit => $prix) {
    echo $produit . " : " . $prix . " €<br>";
}

echo "<h3>Produits coûtant plus de 50 €</h3>";

foreach ($produits as $produit => $prix) {
    if ($prix > 50) {
        echo $produit . " : " . $prix . " €<br>";
    }
}

$nombreProduits = 0;

foreach ($produits as $produit => $prix) {
    $nombreProduits++;
}

echo "<br>Nombre de produits : " . $nombreProduits;

?>