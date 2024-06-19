<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $message = htmlspecialchars($_POST['message']);
    
    // Créer le contenu de l'email
    $to = "stephanesoilihi@yahoo.fr"; // Remplacez par votre adresse email
    $subject = "Nouveau message de contact";
    $body = "Nom: $nom\nPrénom: $prenom\nTéléphone: $telephone\nMessage:\n$message";
    $headers = "From: webmaster@votresite.com"; // Remplacez par l'adresse email de votre site
    
    // Envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'email.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
