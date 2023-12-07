<?php
$title = "ch04";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Delete the tmp database if it exists
    try {
        if (file_exists(__DIR__ . "/tmp.db"))
            unlink(__DIR__ . "/tmp.db");
    } catch (Exception $e) {
    }

    // Create a tmp database (to avoid messing with the real one)
    try {
        $db = new SQLite3(__DIR__ . "/tmp.db");
        $db->exec("CREATE TABLE users (username TEXT, password TEXT)");
        $db->exec("INSERT INTO users VALUES ('admin', 'M0tD3P4ss3_4dm1n@INTROUVABLE_MWHAHAHAHAH')");

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->query($query);
        $row = $result->fetchArray();

        if ($row) {
            $flag = "SQL_1nj3ct10n_4dm1n";
        } else {
            $error = "Mauvais nom d'utilisateur ou mot de passe";
        }
    } catch (Exception $e) {
        $error = "Erreur lors de la connexion à la base de données";
    } finally {
        // Delete the tmp database
        try {
            if (file_exists(__DIR__ . "/tmp.db"))
                unlink(__DIR__ . "/tmp.db");
        } catch (Exception $e) {
        }
    }
}

include_once(__DIR__ . "/../partials/header.php"); ?>

<h1>Challenge 4</h1>

<h2>Connexion (en remote cette fois!)</h2>
<form action="" method="POST">
    <input type="text" placeholder="Nom d'utilisateur" name="username" id="username" />
    <input type="password" placeholder="Mot de passe" name="password" id="password" />
    <button id="login" type="submit" name="login">Se Connecter</button>
</form>

<?php if (isset($error)) : ?>
    <p class="error"><?= $error ?></p>
<?php endif; ?>

<?php if (isset($flag)) : ?>
    <p class="success">Bravo! Le flag est: <code><?= $flag ?></code></p>
<?php endif; ?>

<?php include_once(__DIR__ . "/../partials/footer.php");
