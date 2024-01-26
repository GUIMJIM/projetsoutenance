<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style entreprise.css">
    <title>Inscription Entreprise</title>
</head>
<body>
    <h1>Inscription Entreprise</h1>
    <form action="traitement-inscription-entreprise.php" method="POST">
        <div>
        <label for="nomEntreprise">Nom de l'entreprise :</label>
        <input type="text" name="nomEntreprise" required><br>

        <label for="secteurActivite">Secteur d'activité :</label>
        <input type="text" name="secteurActivite" required><br>

        <label for="description">Description :</label>
        <textarea name="description"></textarea><br>

        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse"><br>

        <label for="contactNom">Nom du contact :</label>
        <input type="text" name="contactNom"><br>

        <label for="contactEmail">Email du contact :</label>
        <input type="email" name="contactEmail"><br>

        <input type="submit" value="S'inscrire">
        </div>
        <img src="2304.i402.024.F.m004.c9.Corporate culture background.jpg" alt="image login" class="img-login">
    </form>
</body>
</html>