<?php
define("SAUT","\n");
$prix = 120;

if ($prix < 50) {
    $reduction = 0;
} elseif ($prix <= 100) {
    $reduction = 0.05;
} else {
    $reduction = 0.10;
}

$prixFinal = $prix * (1 - $reduction);

echo "Prix initial : " . $prix . " €" . SAUT;
echo "Réduction : " . ($reduction * 100) . " %" . SAUT;
echo "Prix après réduction : " . $prixFinal . " €" . SAUT;
