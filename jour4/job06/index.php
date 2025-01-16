<?php
    $nombrePair = $_GET[2]
    $nombreImpair = $_GET[5]

    if ($nombrePair % 2 == 0){
        echo "Nombre pair"
    }
    else ($nombreImpair % 2 != 0){
        echo "Nombre impair";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width">
    <title>Formulaire de type GET</title>
</head>
<body>
<form action="" method="GET">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>
