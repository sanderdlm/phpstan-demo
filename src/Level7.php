<?php

/*
 * 7.
 * report partially wrong union types -
 * if you call a method that only exists on
 * some types in a union type, level 7 starts
 * to report that; other possibly incorrect situations
 */

$json = file_get_contents('demo.txt');
$json = json_decode($json, true);

echo $json;
