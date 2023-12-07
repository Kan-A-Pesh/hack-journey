<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?> | 404 Hacker's Journey</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />
    <link rel="stylesheet" href="/style.css" />

    <?php
    // Include scripts from $scripts array
    if (isset($scripts)) {
        foreach ($scripts as $script) {
            echo "<script src=\"$script\" defer></script>";
        }
    }
    ?>
</head>

<body>
    <main class="container">