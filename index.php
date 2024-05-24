<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="GERARD Christopher, CUNY Cédric, FIORE Anaïs"/>
        <meta name="description" content="Application WEB de gestion des incidents de cybersécurité"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Accueil - CAC40</title>
        <link rel="stylesheet" href="./style/styles.css">
        <script src="./scripts/scripts.js"></script>
    </head>
    

    <body>
        <h1>Accueil - Application WEB - CAC40</h1>
        <p><i>
            Développé par GERARD Christopher, CUNY Cédric & FIORE Anaïs
            <br>
            Notre dépot GitHub est accessible <a class="link" href="https://github.com/Christ0u/SecurityManagementApp" target="_blank">ici</a>
        </i></p>

        <h2>Formulaire de connexion</h2>
        <?php
        session_start();
        if ( isset($_SESSION['isLoggedIn']) ){
            if ( $_SESSION['isLoggedIn'] == 0 ){
                echo "<p style='color:red;'>Identifiant et/ou mot de passe incorects</p>";
            }
        }
        ?>
        <form action="./src/login.php" method="post">
            <ul>
                <li>
                    <label for="login">Identifiant:</label>
                    <br>
                    <input type="text" id="login" name="login" placeholder="Email ou login" required/>
                </li>
                <li>
                    <label for="password">Mot de passe :</label>
                    <br>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required/>
                </li>
            </ul>
            <button class="button button-login" type="submit">Se connecter</button>
        </form>
    </body>
</html>