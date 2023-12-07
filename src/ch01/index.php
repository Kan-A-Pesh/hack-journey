<?php
$title = "ch01";

include_once(__DIR__ . "/../partials/header.php"); ?>

<h1>Challenge 1</h1>

<?php if (isset($_POST["index"]) && $_POST["index"] == "ch01") : ?>
    <p class="success">Bravo! Vous avez trouvé, utilisez le flag <code>Tr0p_F4cile</code> pour valider ce challenge!</p>
<?php endif; ?>

<p>
    Oops... Il semblerait que le site soit en maintenance.
    <br />
    Il revient bientôt!
</p>

<form action="" method="POST">
    <input type="hidden" name="index" value="ch01" />

    <!-- Retirer le disabled une fois la maintenance terminée -->
    <button type="submit" disabled>Se connecter</button>
</form>


<?php include_once(__DIR__ . "/../partials/footer.php");
