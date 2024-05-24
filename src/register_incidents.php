<?php
    session_start();
    require_once(__DIR__ . '/init.php');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="GERARD Christopher, CUNY Cédric, FIORE Anaïs"/>
        <meta name="description" content="Application WEB de gestion des incidents de cybersécurité"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Liste des incidents - CAC40</title>
        <link rel="stylesheet" href="../style/styles.css">
        <script src="../scripts/scripts.js"></script>
    </head>

    <body>
        <h1>Saisir un incident</h1>

        <button class='button' onclick='history.back();'>⏎ Retour</button>

       
        <form action="" method="post">
            <ul>
                <li>
                    <label for="login">Titre de l'incident:</label>
                    <br>
                    <input type="text" id="title" name="title" required/>
                </li>
                <li>
                    <label for="date">Date</label>
                    <br>
                    <input type="date" id="date" name="date" required>
                </li>
                <li>
                    <label for="date">Gravité</label>
                    <br>
                    <select name="severity" id="severity">
                        <option value="0">--Sélectionner un niveau de gravité--</option>
                        <option value="1">1 (faible)</option>
                        <option value="2">2 (modéré)</option>
                        <option value="3">3 (élevé)</option>
                    </select>
                </li>
                <li>
                    <label for="description">Description</label>
                    <br>
                    <textarea type="text" id="description" name="description" required style="width:50%;"></textarea>
                </li>
                <li>
                    <label for="Pièce jointe">Description</label>
                    <br>
                    <input type="file" id="file" name="file">
                </li>
            </ul>
            <button class="button" type="submit" onclick='addIncident();'>Valider</button>
        </form>
    </body>
</html>