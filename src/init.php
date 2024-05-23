<?php
    //Paramètres de connexion
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $Database = "securitymanagementapp";

    //Instanciation d'une connexion à la BDD
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($Servername, $Username, $Password, $Database);

    //Vérification de la connexion
    if ($conn->connect_error){
        die("La connexion à la base de données a échouée " . $conn->connect_error);
    }
    //echo "Connexion établie à la base de données : " . $conn->host_info . "<br><br>";
    echo "<script>console.log('Connexion établie à la base de données...');</script>";
?>