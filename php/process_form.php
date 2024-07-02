<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $message = htmlspecialchars($_POST['message']);

    // Créer une instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres du serveur
        $mail->isSMTP();                                            // Utiliser SMTP
        $mail->Host       = 'smtp.mail.yahoo.com';                    // Serveur SMTP
        $mail->SMTPAuth   = true;                                   // Activer l'authentification SMTP
        $mail->Username   = 'stephanesoilihi@yahoo.fr';              // SMTP username
        $mail->Password   = 'kgvqqxkezfmpjpke';                     // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        // Activer le cryptage TLS
        $mail->Port       = 587;                                    // Port TCP à utiliser
        $mail->CharSet    = 'UTF-8'; 

        // Destinataires
        $mail->setFrom('stephanesoilihi@yahoo.fr', 'Webmaster');
        $mail->addAddress('stephanesoilihi@yahoo.fr');             // Ajouter un destinataire

        // Contenu
        $mail->isHTML(true);                                        // Définir le format de l'email à HTML
        $mail->Subject = 'Nouveau message de contact';
        $mail->Body    = "Nom: $nom<br>Prénom: $prenom<br>Téléphone: $telephone<br>Message:<br>$message";

        $mail->send();
        $_session['message_success'] = "Email bien envoyé";

    } catch (Exception $e) {
        echo "Échec de l'envoi de l'email. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Méthode non autorisée.";
}
?>