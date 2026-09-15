<?php

require __DIR__ . "/config.php";

include __DIR__ . "/header.php";

?>

<main>

    <p>
        Bienvenue sur <?php echo $nomSite; ?>
    </p>

    <p>
        Version : <?php echo $version; ?>
    </p>

</main>

<?php

include __DIR__ . "/footer.php";

?>