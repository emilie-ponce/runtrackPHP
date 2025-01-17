<?php
    function calcule($nombre1, $operateur, $nombre2){
        switch($operateur){
            case '+':
                return $nombre1 + $nombre2;
            case '-':
                return $nombre1 - $nombre2;
            case '*':
                return $nombre1 * $nombre2;
            default:
                return "erreur";
        }
    }

    $resultat = calcule(11, '*', 17);
    echo "résultat de l'opération : $resultat";
?>
