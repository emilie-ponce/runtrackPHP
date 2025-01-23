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
    $req = $mysqlClient -> prepare("SELECT COUNT(id) AS 'nb_etudiants' FROM etudiants");
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
            <th>nb_etudiants</th>
        </tr>
    <?php 
        foreach ($req as $row){
        ?>
        <tr>
            <td><?php echo $row['nb_etudiants']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

    
