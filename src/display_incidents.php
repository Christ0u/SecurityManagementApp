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
        <h1>Listes des incidents enregistrés</h1>

        <button class='button' onclick='history.back();'>⏎ Retour</button>

        <?php
            session_start();

            require_once(__DIR__ . '/init.php');

            //Exécution de la requête SQL & Récupération des résultats
            $query = "SELECT * FROM `incident` ORDER BY `incident_date` DESC";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // Créer un tableau HTML
                echo "<table>";
                echo "<tr><th>ID</th><th>Date d'enregistrement</th><th>Gravité</th><th>Statut</th><th>Description</th></tr>";

                // Parcourir les résultats et afficher chaque incident dans une ligne du tableau
                while ($incident = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $incident["id_incident"] . "</td>";
                    echo "<td>" . $incident["incident_date"] . "</td>";
                    echo "<td>" . $incident["severity"] . "</td>";
                    echo "<td>" . $incident["status"] . "</td>";
                    echo "<td>" . $incident["description"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p>Aucun incident n'a été enregistré.</p>";
            }
        ?>
    </body>
</html>