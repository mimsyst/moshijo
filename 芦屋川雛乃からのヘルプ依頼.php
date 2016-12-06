<?php
    $in = trim(fgets(STDIN));
    $enc = trim(fgets(STDIN));
    $str = trim(fgets(STDIN));
    if ($enc == "encode") {
        $tbl = explode(" ", $in);
    } else {
        $tmp = explode(" ", $in);
        for ($i = 0; $i < 10; $i++) {
            $tbl[$tmp[$i]] = $i;
        }
    }
    $out = "";
    foreach(str_split($str) as $n){
        $out .= $tbl[$n];
    }
    echo $out."\n";
?>
