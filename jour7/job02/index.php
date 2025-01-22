<?php
    if (isset($_COOKIE['nbvisites'])) {
        $nbVisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbVisites = 1;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>
<body>
    <p>Nombre de visites: <?php echo $nbVisites; ?></p>

    <form method="POST">
        <button type="submit" name="reset">reset</button>
    </form>
</body>
</html>
 