<?php

    $filename = "advent-day-one-input.txt";

    $handle = fopen($filename, "r");

    $contents = fread($handle, filesize($filename));

    fclose($handle);

    $length = strlen($contents);

    $inputs = [];

    $endingFloor = 0;

    for($i = 0; $i < $length; $i += 1) {
        $inputs[$i] = $contents[$i];
    }

    foreach($inputs as $key => $input) {
        if ($endingFloor === -1) {
            echo $key . PHP_EOL;
        }

        if ($input === "(") {
           $endingFloor += 1; 
        } else if ($input === ")") {
            $endingFloor -= 1;
        }
    }

    echo $endingFloor . PHP_EOL;

?>