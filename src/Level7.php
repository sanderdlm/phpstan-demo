<?php

$json = file_get_contents('demo.txt');
$json = json_decode($json, true);

echo $json;
