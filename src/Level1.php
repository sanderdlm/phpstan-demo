<?php

/*
 * 1.
 * possibly undefined variables, unknown magic methods
 * and properties on classes with __call and __get
 */

function format(string $text, string $type): string
{
    if ($type === 'json') {
        $output = json_encode($text);
    }

    if ($type === 'html') {
        $output = htmlentities($text);
    }

    return $output;
}

echo format('This is a demo', 'json') . PHP_EOL;
echo format('This is a demo', 'html') . PHP_EOL;
//echo format('This is a demo', 'xml'); -> Will error!
