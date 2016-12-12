<?php
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
        $s = trim(fgets(STDIN));
        $item[] = explode(" ", $s);
    }
    $m = trim(fgets(STDIN));
    for ($i = 0; $i < $m; $i++) {
        $s = trim(fgets(STDIN));
        $buy = explode(" ", $s);
        $no = $buy[0] - 1;
        $num = $buy[1];
        $discount = floor(($num / $item[$no][1])) * $item[$no][2];
        $total = ($item[$no][0] * $num) - $discount;
        echo $total."\n";
    }
?>
