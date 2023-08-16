<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $motdepasse = $_POST["motdepasse"];
    
    // Enregistrez les informations dans une base de données
    
    // Envoyez un e-mail de vérification
    $to = $email;
    $subject = "Vérification d'inscription";
    $message = "Cliquez sur ce lien pour vérifier votre inscription : http://www.votresite.com/verification.php";
    $headers = "From: webmaster@votresite.com" . "\r\n" .
               "Reply-To: webmaster@votresite.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    mail($to, $subject, $message, $headers);
    
    // Redirection vers la page de profil
    header("Location: profile.php");
    exit(); // Assurez-vous d'arrêter le script ici
}
?>
