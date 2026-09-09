<?php

require  "connexion.php";

$produits = [];
$message = "";

if (isset($_POST["prix_max"])) {

    $prixMax = (float) $_POST["prix_max"];

    $sql = "SELECT nom, prix, stock
            FROM produit
            WHERE prix <= :prix_max
            ORDER BY prix ASC";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        "prix_max" => $prixMax
    ]);

    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($produits) === 0) {
        $message = "Aucun produit correspondant.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Catalogue de produits</title>
</head>

<body>

<h1>Catalogue de produits</h1>

<form method="post">

    <label for="prix_max">Prix maximum :</label>

    <input
        type="number"
        name="prix_max"
        id="prix_max"
        step="0.01"
        min="0"
        required
    >

    <button type="submit">Rechercher</button>

</form>

<?php if (!empty($produits)): ?>

    <table border="1">

        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Stock</th>
        </tr>

        <?php foreach ($produits as $produit): ?>

            <tr>
                <td><?= htmlspecialchars($produit["nom"]) ?></td>
                <td><?= number_format($produit["prix"], 2, ",", " ") ?> €</td>
                <td><?= $produit["stock"] ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

<?php elseif ($message !== ""): ?>

    <p><?= $message ?></p>

<?php endif; ?>

</body>
</html>