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

function registerIncidents(){
    location.href = "../src/register_incidents.php";
}

function addIncident(){
    alert("L'incident a été ajouté.");
}