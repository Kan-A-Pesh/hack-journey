<?php
$title = "ch05";

// Get the URL
$url = "$_SERVER[REQUEST_SCHEME]://$_SERVER[HTTP_HOST]/ch05/";

if (isset($_POST["bug"])) {
    $bug = $_POST["bug"];

    $crawler_container_name = "crawler";
    $web_container_name = "web";

    $bug = str_replace("$url", "http://$web_container_name/ch05/", $bug);

    // Url encode the bug
    $bug = urlencode($bug);

    // Add the crawl url
    $bug = "http://$crawler_container_name/?check=$bug";

    $ch = curl_init($bug);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);

    $success = true;
}

include_once(__DIR__ . "/../partials/header.php"); ?>

<h1>Challenge 5</h1>

<h2>Système de rapport automatique!</h2>

<form action="" method="POST">
    <label for="bug">Lien du bug</label>
    <input type="text" placeholder="Lien du bug" name="bug" id="bug" value="<?= $url ?>" />
    <button id="report" type="submit" name="report">Envoyer</button>

    <?php if (isset($success) && $success) { ?>
        <p class="success">Merci pour votre rapport!</p>
    <?php } ?>
</form>

<?php include_once(__DIR__ . "/../partials/footer.php");
