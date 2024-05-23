// Fonction de déconnexion
function logoff(){
    if (confirm("Vous allez être déconnecté...") == true) {
        location.href = "../src/logoff.php";
    }
}

// Redirection vers le fichier permettant l'affichage des incidents enregistrés
function displayIncidents(){
    location.href = "../src/display_incidents.php";
}