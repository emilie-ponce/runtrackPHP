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
    $req = $mysqlClient -> prepare("SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");
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
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
        </tr>
    <?php 
        foreach ($req as $row){
        ?>
        <tr>
            <td><?php echo $row['prenom']?></td>
            <td><?php echo $row['nom']?></td>
            <td><?php echo $row['naissance']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

    
