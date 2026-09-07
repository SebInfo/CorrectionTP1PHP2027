<?php
define("SAUT","\n");
function calculerTTC(float $prixHT): float
{
    return $prixHT * 1.20;
}
function calculerRemise(float $prix, float $remise): float
{
    return $prix * (1 - $remise);
}

echo calculerRemise(200, 0.10) . SAUT;
print calculerTTC(100) . SAUT;
?>