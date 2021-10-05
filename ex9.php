<?php
    echo '1 ';
    for ($i = 2; $i <= 100; $i++) {
        for ($j = 2; $j <= 100; $j++) {
            if ($i % $j == 0 && $i != $j) {
                $x = FALSE;
                break;
            } else {
                $x = TRUE;
                continue;
            }
        } if ($x == TRUE) {
            echo $i . ' ';
        }
    }
?>
