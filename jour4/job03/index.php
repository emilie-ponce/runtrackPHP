<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width">
    <title>Formulaire POST</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
