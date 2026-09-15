<?php
define("SAUT","\n");
$prix = 55;

if ($prix < 50)  echo "Aucune réduction"; 
if ($prix >=50 and $prix <= 100) echo "Réduction de 5 %";
if ($prix > 100) echo "Réduction de 10 %";

echo SAUT;
