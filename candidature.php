<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecandidature.css">
    <title>Candidature en ligne</title>
</head>
<body>
    <div class="container">
        <h2>Formulaire de Candidature</h2>
        <form id="recruitmentForm" action="process.php" method="post">
            <label for="fullName">Nom complet :</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="resume">CV (PDF) :</label>
            <input type="file" id="resume" name="resume" accept=".pdf" required>

            <button type="submit">Soumettre</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>