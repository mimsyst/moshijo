<?php
    $in = trim(fgets(STDIN));
    $n = explode(" ", $in);
    if ($n[2] == "+") {
        $out = $n[0] + $n[1];
    } else {
        $out = $n[0] - $n[1];
    }
    echo $out."\n";
?>
