
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur la Plateforme de Recrutement</title>
    <link rel="stylesheet" href="styleaccueil.css">
</head>
<body>


<div class="container">
    <div class="welcome-message">
        <h2>Bienvenue sur la Plateforme de Recrutement</h2>
   

    <div class="login-form">
        <h3>Identifiez-vous</h3>
        <form id="loginForm" action="traitement_accueil.php" method="POST">
            <!-- Ajoutez vos champs d'identification ici (nom d'utilisateur, mot de passe, etc.) -->
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Se connecter">
        </form>

        <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
    </div>
</div>
    <div class="illustration">
    <img src="2304.i402.024.F.m004.c9.Corporate culture background.jpg" alt="image login" class="img-login" >
    </div>
</div>

<script>
    // Ajoutez ici des scripts JavaScript si nécessaire
</script>

</body>
</html>