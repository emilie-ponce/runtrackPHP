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
    $req = $mysqlClient -> prepare("SELECT AVG(capacite) AS capacite_moyenne FROM salles");
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
            <th>capacite_moyenne</th>
        </tr>
    <?php 
        foreach ($req as $row){
        ?>
        <tr>
            <td><?php echo $row['capacite_moyenne']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

    
