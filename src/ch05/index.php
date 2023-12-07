<?php
$title = "ch05";

include_once(__DIR__ . "/../partials/header.php"); ?>

<h1>Challenge 5</h1>

<p>
    Bienvenue!<br>
    Commencez par entrer votre nom pour commencer l'aventure.
</p>

<form action="welcome.php" method="GET">
    <input type="text" placeholder="Nom" name="username" id="username" />
    <button id="login" type="submit">Commencer</button>
</form>


<?php include_once(__DIR__ . "/../partials/footer.php");
