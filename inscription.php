<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecandidature.css">
    <title>Inscription</title>
    <script>
        function redirigerFormulaire() {
            var typeUtilisateur = document.getElementById("posture").value;
            
            if (posture === "Candidat") {
                window.location.href = "inscription_candidat.php";
            } else if (posture === "Entreprise") {
                window.location.href = "inscription_entreprise.php";
            }
        }
        </script>
</head>
<body>
    <div class="container">
        <h2>Formulaire d'Inscription</h2>
        <form id="registrationForm" action="process_registration.php" method="POST" onsubmit="redirigerFormulaire();">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="posture">posture :</label>
            <select id="posture" name="posture" required>
                <option value="Candidat">Candidat</option>
                <option value="Entreprise">Entreprise</option>
                <!-- <option value="Administrateur">Administrateur</option> -->
            </select>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>