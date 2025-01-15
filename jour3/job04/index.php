<?php
    $str = "Dans l'espace, personne ne vous entend crier";
    $compteur = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        $compteur++;
    }
    echo "Le nombre de caractères dans la chaîne est :" . $compteur;
?>
