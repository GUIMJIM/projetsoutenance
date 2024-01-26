<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashbord-Entreprise.css">
    <title>Tableau de Bord - Entreprise</title>
</head>
<body>

<header>
    <h1>Bienvenue, [Nom Entreprise] !</h1>
    <section id="photo-profil">
    <h2>Votre Logo</h2>
    <?php
    // Logique pour récupérer le chemin du logo de l'entreprise depuis la base de données
    $cheminLogoEntreprise = "chemin/vers/logo_entreprise.jpg"; // Remplacez cela par la logique réelle
    ?>
    <img src="<?php echo $cheminLogoEntreprise; ?>" alt="Logo de l'Entreprise">
</section>
    <nav>
        <ul>
            <li><a href="modifier-profil.php">Modifier le Profil</a></li>
            <li><a href="#">Changer le Mot de Passe</a></li>
            <li><a href="deconnexion.php">Se Déconnecter</a></li>
            <li> <a href="modification-pp-entreprise.php">Modifier photo de profil</a></li>
           
        </ul>
    </nav>
</header>

<section id="offres-emploi">
    <h2>Vos Offres d'Emploi</h2>
    <!-- Logique PHP pour récupérer et afficher les offres d'emploi publiées par l'entreprise -->
    <ul>
        <li><a href="#">Offre d'Emploi 1</a></li>
        <li><a href="#">Offre d'Emploi 2</a></li>
        <!-- Ajoutez plus d'éléments dynamiquement selon les offres de l'entreprise -->
    </ul>
</section>

<section id="notifications">
    <h2>Notifications</h2>
    <!-- Logique PHP pour récupérer et afficher les notifications liées aux candidatures -->
    <p>Aucune notification pour le moment.</p>
</section>

<section id="liens-rapides">
    <h2>Liens Rapides</h2>
    <ul>
        <li><a href="#">Gérer les Candidatures</a></li>
        <li><a href="#">Publier une Nouvelle Offre d'Emploi</a></li>
        <!-- Ajoutez plus de liens en fonction des besoins -->
    </ul>
</section>

<section id="actions-rapides">
    <h2>Actions Rapides</h2>
    <button>Consulter les Profils des Candidats</button>
</section>

</body>
</html>
