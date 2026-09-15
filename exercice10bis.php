<?php

require __DIR__ . "/config.php";

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title><?php echo $nomSite; ?></title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<?php

include __DIR__ . "/header.php";

?>

<main class="contenu">

    <h2>Bienvenue</h2>

    <p>
        Bienvenue sur <?php echo $nomSite; ?>
    </p>

    <p class="information">
        Version du site : <?php echo $version; ?>
    </p>

</main>

<?php

include __DIR__ . "/footer.php";

?>

</body>

</html>