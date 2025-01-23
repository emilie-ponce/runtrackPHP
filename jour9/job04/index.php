<?php
    #chaîne de connexion à la BDD
    try
    {
	$mysqlClient = new PDO('mysql:host=localhost;dbname=jour8;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
    die('Erreur : ' . $e->getMessage());
    }
    
    #requête SQL
    $req = $mysqlClient -> prepare("SELECT * FROM etudiants WHERE prenom LIKE 'T%'");
    $req-> setFetchMode(PDO::FETCH_ASSOC);
    $req -> execute();
?>

<!--affichage des données-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </tr>
    <?php 
        foreach ($req as $row){
        ?>
        <tr>
            <td><?php echo $row['prenom']?></td>
            <td><?php echo $row['nom']?></td>
            <td><?php echo $row['naissance']?></td>
            <td><?php echo $row['sexe']?></td>
            <td><?php echo $row['email']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

    
