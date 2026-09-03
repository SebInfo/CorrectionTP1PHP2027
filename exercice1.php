<?php

$produit = "Ordinateur portable";
$prixHT = 750;
define("SAUT","\n");

const TVA = 0.20;

$prixTTC = $prixHT * (1 + TVA);

echo $produit . SAUT;
echo "Prix HT : " . $prixHT . " €" . SAUT;
echo "Prix TTC : " . $prixTTC . " €". SAUT;

?>