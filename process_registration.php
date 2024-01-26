<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
 // Vérifier que l'email est bien entré
 if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Veuillez entrer une adresse email valide.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assurez-vous que le formulaire a bien été soumis en méthode POST

    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $posture= $_POST['posture'];
    
    
    // Exécuter la requête
    // if ($conn->query($sql) === TRUE) {
    //     echo json_encode(['success' => true, 'message' => 'Inscription réussie!']);
    // } else {
    //     echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'inscription: ' . $sql . '<br>' . $conn->error]);
    // }

    // Connexion à la base de données (à adapter avec vos informations de connexion)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "applicationrecrutement";

   

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }

    // Hasher le mot de passe (assurez-vous d'utiliser des méthodes de hachage sécurisées en production)
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Préparer et exécuter la requête d'insertion dans la table "Utilisateurs"

   
    $sql = "INSERT INTO utilisateurs (`NomUtilisateur`, `MotDePasse`, `Email`, `posture`) VALUES ('$username', '$password', '$email', '$posture')";

    if ($conn->query($sql) === TRUE) {
        echo '{"success":true, "message":"Inscription réussie!"}';
    } else {
        echo '{"success":false, "message":"Erreur lors de l\'inscription: ' . $conn->error . '"}';
    }
    switch ($posture) {
        case 'Candidat':
            $sql = "INSERT INTO candidats (`NomUtilisateur`, `MotDePasse`, `Email`, `Posture`) VALUES ('$username', '$password', '$email', '$posture')";
            break;
        case 'Entreprise':
            $sql = "INSERT INTO entreprises (`NomUtilisateur`, `MotDePasse`, `Email`, `Posture`) VALUES ('$username', '$password', '$email', '$posture')";
            break;
        // Ajoutez d'autres cas selon les types d'utilisateurs
        // default:
        //     echo json_encode(['success' => false, 'message' => 'Posture invalide.']);
            exit();
    }

    if ($posture == 'Candidat') {
        header('Location: inscription_candidat.php');
        exit();
    } elseif ($posture == 'Entreprise') {
        header('Location: inscription_entreprise.php');
        exit();
    } else {
        echo "Type d'utilisateur non valide.";
    }
} else {
    // Redirigez l'utilisateur s'il n'a pas soumis le formulaire
    header('Location: inscript.php');
    exit();
}
    // Fermer la connexion à la base de données
    $conn->close(); 
// else {
    // Si la requête n'est pas une requête POST, redirigez l'utilisateur ou faites quelque chose d'autre
    // header('Location: inscription.php');
    // exit();
// }
?>