<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashbord-Candidat.css">
    <title>Tableau de Bord</title>
</head>
<body>

<header>
    <h1>Bienvenue, [Nom Utilisateur] !</h1>
    <section id="photo-profil">
    <h2>Votre Logo</h2>
    <?php
    // Logique pour récupérer le chemin du logo de l'entreprise depuis la base de données
    $cheminLogophotoprofil = "chemin/vers/logo_photoprofil.jpg"; // Remplacez cela par la logique réelle
    ?>
    <img src="<?php echo $cheminphotoprofil; ?>" alt="photoprofil">
</section>
    <nav>
        <ul>
            <li><a href="#">Modifier le Profil</a></li>
            <li><a href="#">Changer le Mot de Passe</a></li>
            <li><a href="deconnexion.php">Se Déconnecter</a></li>
        </ul>
    </nav>
</header>

<section id="offres-emploi">
    <h2>Vos Offres d'Emploi</h2>
    <!-- Insérez ici la logique PHP pour récupérer et afficher les offres d'emploi -->
    <ul>
        <li><a href="#" class="lien">Offre d'Emploi 1</a></li>
        <li><a href="#" class="lien">Offre d'Emploi 2</a></li>
        <!-- Ajoutez plus d'éléments dynamiquement selon les offres de l'utilisateur -->
    </ul>
</section>

<section id="notifications">
    <h2>Notifications</h2>
    <!-- Insérez ici la logique PHP pour récupérer et afficher les notifications -->
    <p>Aucune notification pour le moment.</p>
</section>

<section id="liens-rapides">
    <h2>Liens Rapides</h2>
    <ul>
        <li><a href="#">Voir Toutes les Offres d'Emploi</a></li>
        <li><a href="#">Accéder à Votre Profil</a></li>
        <!-- Ajoutez plus de liens en fonction des besoins -->
    </ul>
</section>

<section id="actions-rapides">
    <h2>Actions Rapides</h2>
    <button><a href="candidature.php">Postuler à une Nouvelle Offre</a></button>
</section>

</body>
</html>
