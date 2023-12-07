<?php
$title = "ch05";
$flag = "[REDACTED]";

// Check for bot cookie
if (isset($_SERVER["HTTP_ROBOT"]) && $_SERVER["HTTP_ROBOT"] == "J'ai un cookie qui prouve que je suis un r0b0t!") {
    $flag = "4ut0m4t1c_r3p0rt1ng_1s_4w3s0m3";
}

include_once(__DIR__ . "/../partials/header.php"); ?>

<h1>Challenge 5</h1>

<h2>Bienvenue, <?= $_GET["username"] ?>!</h2>
<p>
    Vous êtes maintenant prêt à commencer l'aventure.
    <br />
    L'administrateur système a mis en place un système de rapport automatique, comment ça marche?
    <br />
    Il vous suffit de cliquer sur le bouton ci-dessous pour envoyer un rapport de bug, vous envoyez le lien contenant le bug et
    un <b>robot</b> s'occupera de regarder le problème de façon completement automatique!
    <br />
    N'est-ce pas génial?

    <br />
    <br />

    D'ailleurs c'est aussi lui qui contient le flag juste ici: <code><?= $flag ?></code> (mais chut, ne le dites à personne!)
</p>
<a class="primary" href="report.php">Un bug? Signalez-le ici!</a>


<?php include_once(__DIR__ . "/../partials/footer.php");
