<?php
    $nombre = [200, 204, 173, 98, 171, 404, 459];
    foreach ($nombre as $nombresDonnés) {
        if ($nombresDonnés % 2 == 0) {
            echo "$nombresDonnés est paire<br />";
        } else {
            echo "$nombresDonnés est impaire<br />";
        }
    }
?>
