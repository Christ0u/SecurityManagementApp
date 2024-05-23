<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="GERARD Christopher, CUNY Cédric, FIORE Anaïs"/>
        <meta name="description" content="Application WEB de gestion des incidents de cybersécurité"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Dashboard - CAC40</title>
        <link rel="stylesheet" href="../style/styles.css">
        <script src="../scripts/scripts.js"></script>
    </head>

    <body>
        <?php
            session_start();

            require_once(__DIR__ . '/init.php');

            if (isset($_POST['login']) && isset($_POST['password'])) {
                $login = $_POST['login'];
                $password = $_POST['password'];

                //Exécution de la requête SQL & Récupération des résultats
                $query = "SELECT * FROM `member` WHERE login = '$login'";
                $result = $conn->query($query);
                $user = $result->fetch_assoc();

                if ( ($result->num_rows > 0) && ($password == $user['password']) ){
                    $_SESSION['isLoggedIn'] = 1;
                    echo "<h1>Bienvenue " . $user['first_name'] . " " . $user['last_name'] . "👋</h1><br>";
                    echo "<button class='button' onclick='displayIncidents();'>Voir les incidents</button>";
                    echo "<button class='button'>Saisir un incident</button>";
                    echo "<button class='button button-logoff' onclick='logoff();'>Déconnexion</button>";
                }
                else{
                    $_SESSION['isLoggedIn'] = 0;
                    header("Location: ../index.php");
                    exit();
                }
            }
            else{
                echo "Tous les champs n'ont pas été remplis<br>";
            }
        ?>
    </body>
</html>