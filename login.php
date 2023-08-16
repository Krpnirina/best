<?php
// Simulons un tableau associatif de données utilisateur (à remplacer par la vérification de la base de données)
$users = array(
    'utilisateur1' => 'motdepasse1',
    'utilisateur2' => 'motdepasse2'
);

// Récupérer les informations soumises via le formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Vérification des informations d'identification
if (array_key_exists($username, $users) && $users[$username] === $password) {
    // Redirection vers la page profil.html
    header("Location: profil.html");
    exit();
} else {
    // Redirection vers la page de connexion avec un message d'erreur
    header("Location: index.html?error=1");
    exit();
}
?>
