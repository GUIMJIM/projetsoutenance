<?php
session_start();

// Vérifie si l'utilisateur est déjà connecté, le redirige vers le tableau de bord


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validez les données (vérifiez si les champs ne sont pas vides, etc.)
    if (empty($username) || empty($password)) {
        $errorMessage = "Veuillez remplir tous les champs.";
    } else {
        // Vérifiez les informations de connexion dans la base de données
        $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "applicationrecrutement";

        // Établissez la connexion à la base de données
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparez la requête SQL pour récupérer l'utilisateur
        $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE NomUtilisateur = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Récupérez les résultats de la requête
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifiez si l'utilisateur existe et si le mot de passe est correct
        if ($user && crypt($password, $user['mot_de_passe'])) {
            // L'utilisateur est connecté avec succès
            $_SESSION['username'] = $username;
            header('Location: dashbord.php');
            exit();
        } else {
            // Échec de la connexion
            $errorMessage = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
}
if (isset($_SESSION['username'])) {
    header('Location: dashbord-entreprise.php');
    exit();
}
// Si nous sommes arrivés ici, il y a eu une erreur
include 'login-form.php'; // Inclure le formulaire de connexion avec le message d'erreur
exit();
?>
