<?php

/*
 * 5.
 * checking types of arguments passed to methods and functions
 */

echo str_starts_with('This string does not contain a five', 5);

function roundToTwoDecimals(float $decimal): float
{
    return round($decimal, 2);
}

echo roundToTwoDecimals('Officient');
