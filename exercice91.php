<?php

$fichier = fopen("connexions.txt", "a");

$ligne = "sebastien;31/08/2026 14:30\n";

fwrite($fichier, $ligne);

fclose($fichier);

?>