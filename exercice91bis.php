<?php

date_default_timezone_set("Europe/Paris");

$fichier = fopen("connexions.txt", "a");

$date = date("d/m/Y H:i");

$ligne = "sebastien;" . $date . "\n";

fwrite($fichier, $ligne);

fclose($fichier);

?>