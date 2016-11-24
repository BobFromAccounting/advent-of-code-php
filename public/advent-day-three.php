<?php
    $filename = "advent-day-three-input.txt";

    $handle = fopen($filename, "r");

    $contents = fread($handle, filesize($filename));

    fclose($handle);

    $length = strlen($contents);

    $inputs = [];

    $presents = 1;

    $position = 0;

    for($i = 0; $i < $length; $i += 1) {
        $inputs[$i] = $contents[$i];
    }

    foreach ($inputs as $key => $coordinate) {
        
        
        

    }