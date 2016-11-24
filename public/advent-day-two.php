<?php

    $measurements = [];

    $dimensions = [];

    $totalWrappingPaperInSquareFeet = 0;

    $length = 0;

    $width = 0;

    $height = 0;

    $filename = "advent-day-two-input.txt";

    $handle = fopen($filename, "r");

    $contents = fread($handle, filesize($filename));

    fclose($handle);

    $measurements = getDimensions($contents);

    $totalWrappingPaperInSquareFeet = parseDimensions($dimensions, $measurements);

    $totalRibbonInCubicFeet = parseDimensionsForRibbon($dimensions, $measurements);

    function getSurfaceArea($length, $width, $height)
    {
        $surfaceArea = (
                (2 * ($length * $width))
                + (2 * ($width * $height))
                + (2 * ($length * $height))
        );

        return $surfaceArea; 
    }

    function getSlack($length, $width, $height)
    {
        $zAxisByXAxis = $length * $width;
        $xAxisByYAxis = $width * $height;
        $zAxisByYAxis = $length * $height;

        if ($zAxisByXAxis < $xAxisByYAxis && $zAxisByXAxis < $zAxisByYAxis) {
            return $zAxisByXAxis;
        } elseif ($xAxisByYAxis < $zAxisByYAxis) {
            return $xAxisByYAxis;
        } else {
            return $zAxisByYAxis;
        }
    }
    
    function getDimensions($contents)
    {
        return explode(PHP_EOL, $contents);
    }

    function getPerimeter($length, $width, $height)
    {
        $zAxisByXAxis = $length * $width;
        $xAxisByYAxis = $width * $height;
        $zAxisByYAxis = $length * $height;

        if ($zAxisByXAxis < $xAxisByYAxis &&$zAxisByXAxis < $zAxisByYAxis) {
            $perimeter = ((2 * $length) + (2 * $width));
        } elseif ($xAxisByYAxis < $zAxisByYAxis) {
            $perimeter = ((2 * $width) + (2 * $height));
        } else {
            $perimeter = ((2 * $length) + (2 * $height));
        }

        return $perimeter;
    }

    function getLengthOfRibbonForBow($length, $width, $height)
    {
        return $length * $width * $height;
    }

    function parseDimensions($dimensions, $measurements)
    {
        foreach ($measurements as $measurement) {
            $dimensions = explode("x", $measurement);

            $length = $dimensions[0];
            $width  = $dimensions[1];
            $height = $dimensions[2];

            $slack = getSlack($length, $width, $height);

            $surfaceArea = getSurfaceArea($length, $width, $height);

            $total += ($slack + $surfaceArea);
        }

        return $total;
    }

    function parseDimensionsForRibbon($dimensions, $measurements)
    {
        foreach ($measurements as $measurement) {
            $dimensions = explode("x", $measurement);

            $length = $dimensions[0];
            $width  = $dimensions[1];
            $height = $dimensions[2];

            $perimeter = getPerimeter($length, $width, $height);

            $bowLength = getLengthOfRibbonForBow($length, $width, $height);

            $total += ($perimeter + $bowLength);
        }

        return $total;
    }


    echo $totalWrappingPaperInSquareFeet . PHP_EOL;

    echo $totalRibbonInCubicFeet . PHP_EOL;

?>