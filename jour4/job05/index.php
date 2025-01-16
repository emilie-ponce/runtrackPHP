<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "John" && $password == "Rambo") {
        echo "C'est pas ma guerre";
    } 
    else {
        echo "Votre pire cauchemar";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width">
    <title>Formulaire de connexion type POST</title>
</head>
<body>
    <form action="" method="POST">
        <label for="username">username</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">password</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
