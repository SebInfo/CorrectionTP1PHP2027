<?php

require "connexion.php";

?>

<form method="post">

    <label>Prix maximum :</label>

    <input
        type="number"
        name="prixMax"
        step="0.01"
        min="0"
        required
    >

    <button type="submit">Rechercher</button>

</form>

<?php

if (isset($_POST["prixMax"])) {

    $prixMax = $_POST["prixMax"];

    echo "Prix maximum choisi : " . $prixMax . " €";

}

?>