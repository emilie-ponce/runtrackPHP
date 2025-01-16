<?php
    $str = "Dans l'espace, personne ne vous entend crier";
    $compteur = 0;
    $i = 0;
    while (isset($str[$i])) {
        $compteur++;
        $i++;
    }
    echo "Le nombre de caractères dans la chaîne est:" . $compteur;
?>