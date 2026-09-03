<?php
define("SAUT","\n");
$stock = 5;

while ($stock > 0) {
    $stock--;
    echo "Ordinateur vendu. Stock restant : " . $stock . SAUT;
}

?>