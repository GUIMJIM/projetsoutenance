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
    $nomEntreprise = $_POST['nomEntreprise'];
    $secteurActivite= $_POST['secteurActivite'];
    $description= $_POST['description'];
    $adresse = $_POST['adresse'];
    $contactNom = $_POST['contactNom'];
    $contactEmail = $_POST['contactEmail'];

   
   
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "applicationrecrutement";

   

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }

         $sql = "INSERT INTO entreprises (`NomEntreprise`, `SecteurActivite`, `Description`, `Adresse`,`ContactNom`,`ContactEmail`) VALUES ('$nomEntreprise', '$secteurActivite', '$description', '$adresse','$contactNom','$contactEmail')";

    if ($conn->query($sql) === TRUE) {
        echo '{"success":true, "message":"Inscription réussie!"}';
        header("Location: dashbord-entreprise.php");
        exit();
    } else {
        echo '{"success":false, "message":"Erreur lors de l\'inscription: ' . $conn->error . '"}';
    }
    
  
} else {
    // Redirigez l'utilisateur s'il n'a pas soumis le formulaire
    header('Location: inscription-entreprise.php');
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