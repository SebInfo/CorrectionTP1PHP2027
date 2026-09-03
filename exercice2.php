<?php
define("SAUT","\n");
$prix = 120;

if ($prix < 50) {
    echo "Aucune réduction";
} elseif ($prix <= 100) {
    echo "Réduction de 5 %";
} else {
    echo "Réduction de 10 %";
}
echo SAUT;
