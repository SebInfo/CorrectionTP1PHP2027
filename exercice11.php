<?php

require "connexion.php";

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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Catalogue de produits</title>

    <link rel="stylesheet" href="style11.css">

</head>

<body>

<div class="conteneur">

    <header class="entete">

        <h1>Catalogue de produits</h1>

        <p>
            Recherchez les produits correspondant à votre budget.
        </p>

    </header>

    <main>

        <section class="carte">

            <form method="post" class="formulaire">

                <label for="prix_max">
                    Prix maximum
                </label>

                <div class="zone-recherche">

                    <input
                        type="number"
                        name="prix_max"
                        id="prix_max"
                        step="0.01"
                        min="0"
                        placeholder="Exemple : 100"
                        required
                    >

                    <button type="submit">
                        Rechercher
                    </button>

                </div>

            </form>

        </section>

        <?php if (!empty($produits)): ?>

            <section class="carte">

                <h2>
                    Résultats de la recherche
                </h2>

                <div class="tableau-conteneur">

                    <table class="resultats">

                        <thead>

                            <tr>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Stock</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($produits as $produit): ?>

                                <tr>

                                    <td>
                                        <?= htmlspecialchars($produit["nom"]) ?>
                                    </td>

                                    <td class="prix">
                                        <?= number_format(
                                            $produit["prix"],
                                            2,
                                            ",",
                                            " "
                                        ) ?> €
                                    </td>

                                    <td>
                                        <?= $produit["stock"] ?>
                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </section>

        <?php elseif ($message !== ""): ?>

            <div class="message">
                <?= $message ?>
            </div>

        <?php endif; ?>

    </main>

    <footer class="pied-page">

        BTS SIO SLAM — PHP et PDO

    </footer>

</div>

</body>

</html>