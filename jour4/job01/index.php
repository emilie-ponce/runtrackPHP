<?php
    echo "Le nombre d'arguments GEPOSTT est :" . count($_POST);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="GET">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Message :</label><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>