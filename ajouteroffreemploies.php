<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajoutoffre.css">
    <title>Document</title>
</head>
<body>
<div class="section add-job-offer">
    <h2>Ajouter une Offre d'Emploi</h2>
    <form id="addJobOfferForm">
      <label for="jobTitle">Titre :</label>
      <input type="text" id="jobTitle" name="jobTitle" required>

      <label for="jobDescription">Description :</label>
      <textarea id="jobDescription" name="jobDescription" required></textarea>

      <label for="publishJob">Publier cette offre :</label>
      <input type="checkbox" id="publishJob" name="publishJob">

      <button type="submit">Ajouter l'Offre</button>
    </form>
  </div>
</div>



</body>
</html>