<?php
$title = "ch03";
$scripts = ["script.js"];

include_once(__DIR__ . "/../partials/header.php"); ?>

<h1>Challenge 3</h1>

<h2>Connexion v2</h2>
<input type="text" placeholder="Nom d'utilisateur" id="username" />
<input type="password" placeholder="Mot de passe" id="password" />
<button id="login">Se connecter</button>

<?php include_once(__DIR__ . "/../partials/footer.php");
