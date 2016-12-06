<?php
    $s = trim(fgets(STDIN));
    if(strpos($s,"help") !== false){
        $s = "SOS";
    }
    echo $s."\n";
?>
