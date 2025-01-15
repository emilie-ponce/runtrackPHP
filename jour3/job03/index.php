<?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelles = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

        for ($i = 0; $i <= strlen($str); $i += 1){
            if ($str[$i] == in_array($str[$i], $voyelles)){
                echo $str[$i];
            }
        }   
?>