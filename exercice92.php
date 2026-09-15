<?php

$fichier = fopen("connexions.txt", "r");

while (!feof($fichier)) {

    $ligne = fgets($fichier);

    echo $ligne . "<br>";
}

fclose($fichier);

?>