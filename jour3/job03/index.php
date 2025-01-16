<?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelles = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
    $i = 0;

    while ($str[$i] != "") {
        foreach ($voyelles as $voyelle) {
            if ($str[$i] == $voyelle) {
                echo $str[$i];
                break; 
            }
        }
        $i++; 
    }
?>
