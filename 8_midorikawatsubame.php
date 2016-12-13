<?php
    $A = trim(fgets(STDIN));

    for ($i = 0; $i < strlen($A); $i++) {
        $tmp = $A / pow(10, $i);
        if (($tmp % 10) > 4){
            $A = round($A, -($i + 1));
        }
    }
    
    echo $A."\n";
?>
