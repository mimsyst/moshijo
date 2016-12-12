˜Z‘ºƒŠƒI‚Ì‹Ù‹}Ž–‘Ô

<?php
    $in = trim(fgets(STDIN));
    $s = explode(" ", $in);
    $cur_arr = explode("/", $s[0]);
    $path_arr = explode("/", $s[1]);

    foreach ($path_arr as $path) {
        if ($path == "..") {
            array_pop($cur_arr);
        } else if ($path == ".") {
        	// nothing to do
        } else {
            array_push($cur_arr, $path);
        }
    }
    $out = "/".(implode("/", $cur_arr));
    echo preg_replace('/^\/+/', '/', $out)."\n";
?>
