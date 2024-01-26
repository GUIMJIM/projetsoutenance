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
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email= $_POST['email'];
    $telephone = $_POST['telephone'];
    $cv = $_POST['cv'];
    $autresInformations = $_POST['autresInformations'];

   
   
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "applicationrecrutement";

   

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }

         $sql = "INSERT INTO candidats (`Nom`, `Prenom`, `Email`, `Telephone`,`CV_path`,`AutresInformations`) VALUES ('$nom', '$prenom', '$email', '$telephone','$cv','$autresInformations')";

    if ($conn->query($sql) === TRUE) {
        echo '{"success":true, "message":"Inscription réussie!"}';
        header("Location: dashbord-candidat.php");
        exit();
    } else {
        echo '{"success":false, "message":"Erreur lors de l\'inscription: ' . $conn->error . '"}';
    }
    
  
} else {
    // Redirigez l'utilisateur s'il n'a pas soumis le formulaire
    header('Location: inscription-cadidat.php');
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