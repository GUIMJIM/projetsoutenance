<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_candidat.css">
    <title>Inscription Candidat</title>
</head>
<body>
    <h1>Inscription Candidat</h1>
    <form action="traitement-inscription-candidat.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" required><br>

        <label for="telephone">Téléphone :</label>
        <input type="tel" name="telephone"><br>

        <label for="cv">CV (PDF, DOC) :</label>
        <input type="file" name="cv" accept=".pdf, .doc"><br>

        <label for="autresInformations">Autres informations :</label>
        <textarea name="autresInformations"></textarea><br>
<div>
        <input type="submit" value="S'inscrire">
        </div>
    </form>
</body>
</html>