<?php
    $n = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
    $r = trim(fgets(STDIN));

    $column = explode(" ", $c);
    $row = explode(" ", $r);
    
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $out[$i][$j] = $row[$i] + $column[$j];
        }
    }
    for ($i = 0; $i < $n; $i++) {
        echo (implode(" ", $out[$i]))."\n";
    }
?>
