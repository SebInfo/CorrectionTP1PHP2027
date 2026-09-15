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

    $prixMax = (float) $_POST["prixMax"];

    $sql = "SELECT *
            FROM produit
            WHERE prix <= :prixMax";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "prixMax" => $prixMax
    ]);

    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($produits as $produit) {

        echo htmlspecialchars($produit["nom"])
            . " - "
            . $produit["prix"]
            . " €<br>";
    }
}

?>