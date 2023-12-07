<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 Hacker's Journey</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css" />
    <link rel="stylesheet" href="/style.css" />
    <script src="/validate.js" defer></script>
</head>

<body>
    <main class="container">
        <hgroup>
            <h1>Bienvenue à la Hacker's Journey!</h1>
            <p>
                Réalisé par <a href="https://github.com/Kan-A-Pesh">Kan-A-Pesh</a> pour la 404 Devinci, vous y trouverez des challenges
                de cybersécurité de plus en plus difficiles.
            </p>
        </hgroup>
        <hr />
        <br />

        <article>
            <header>
                <hgroup>
                    <h2>CH//01: Maintenance</h2>
                    <p>Difficulté: Facile</p>
                </hgroup>
            </header>
            <p>
                Oops... Il semblerait que le site soit en maintenance. L'administrateur système a laissé un message sur la page de
                connection. Connectez vous pour accéder au mot de passe.
            </p>
            <a class="primary" href="ch01/index.php" target="_blank">Ouvrir le challenge dans un nouvel onglet ↗</a>
            <footer>
                <details>
                    <summary id="ch01-title">Envoyer la réponse</summary>
                    <input type="password" placeholder="Secret ..." id="ch01" class="validate" />
                    <button id="ch01-btn">Envoyer</button>
                </details>
            </footer>
        </article>

        <article>
            <header>
                <hgroup>
                    <h2>CH//02: Inspecteur Gadget</h2>
                    <p>Difficulté: Facile</p>
                </hgroup>
            </header>
            <p>
                L'administrateur système de la Hacker's Journey a caché la clé derrière une authentification. Trouvez le mot de passe et
                entrez-le dans le champ ci-dessous.
            </p>
            <a class="primary" href="ch02/index.php" target="_blank">Ouvrir le challenge dans un nouvel onglet ↗</a>
            <footer>
                <details>
                    <summary id="ch02-title">Envoyer la réponse</summary>
                    <input type="password" placeholder="Secret ..." id="ch02" class="validate" />
                    <button id="ch02-btn">Envoyer</button>
                </details>
            </footer>
        </article>

        <article>
            <header>
                <hgroup>
                    <h2>CH//03: Obfuscation</h2>
                    <p>Difficulté: Moyen</p>
                </hgroup>
            </header>
            <p>
                L'admin a décidé de renforcer la sécurité du site en
                <abbr title="Technique qui consiste à rendre illisible pour un humain un programme, tout en le gardant pleinement fonctionnel">obfusquant</abbr>
                le code source.
                Trouvez le mot de passe et entrez-le dans le champ ci-dessous.
            </p>
            <a class="primary" href="ch03/index.php" target="_blank">Ouvrir le challenge dans un nouvel onglet ↗</a>
            <footer>
                <details>
                    <summary id="ch03-title">Envoyer la réponse</summary>
                    <input type="password" placeholder="Secret ..." id="ch03" class="validate" />
                    <button id="ch03-btn">Envoyer</button>
                </details>
            </footer>
        </article>

        <article>
            <header>
                <hgroup>
                    <h2>CH//04: MySQL, c'est quoi?</h2>
                    <p>Difficulté: Moyen</p>
                </hgroup>
            </header>
            <p>
                Pour la nouvelle version de la Hacker's Journey, l'admin a décidé de passer à une base de données MySQL. (La rumeur dit que son nom d'utilisateur est <code>admin</code>).
                <br />
                Connectez vous en tant qu'admin pour trouver le flag.
            </p>
            <a class="primary" href="ch04/index.php" target="_blank">Ouvrir le challenge dans un nouvel onglet ↗</a>
            <footer>
                <details>
                    <summary id="ch04-title">Envoyer la réponse</summary>
                    <input type="password" placeholder="Secret ..." id="ch04" class="validate" />
                    <button id="ch04-btn">Envoyer</button>
                </details>
            </footer>
        </article>

        <article>
            <header>
                <hgroup>
                    <h2>CH//05: Onboarding v1.0</h2>
                    <p>Difficulté: Difficile</p>
                </hgroup>
            </header>
            <p>
                L'admin à lancé un nouveau système d'onboarding pour les nouveaux utilisateurs.
                Pour faire les choses bien, il a même mis en place un système de rapport automatique en cas de problème!
                <br />
                Seul le bot à accès au flag. Trouvez un moyen de le faire parler.
            </p>
            <h4>Note</h4>
            <p>
                Le challenge nécessite de deployer un endpoint public.
                Pour cela, vous pouvez utiliser <a href="https://webhook.site/">webhook.site</a> ou <a href="https://beeceptor.com/">beeceptor.com</a>.
            </p>
            <a class="primary" href="ch05/index.php" target="_blank">Ouvrir le challenge dans un nouvel onglet ↗</a>
            <footer>
                <details>
                    <summary id="ch05-title">Envoyer la réponse</summary>
                    <input type="password" placeholder="Secret ..." id="ch05" class="validate" />
                    <button id="ch05-btn">Envoyer</button>
                </details>
            </footer>
        </article>

        <a class="secondary" id="hard_reset" href="#">Effacer toutes les réponses</a>
    </main>
</body>

</html>