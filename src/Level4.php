<?php

/*
 * 4.
 * basic dead code checking,
 * always false instanceof and other type checks,
 * dead else branches,
 * unreachable code after return; etc.
 */

function odds_or_even(int $number): ?string
{
    if ($number % 2 === 0) {
        return 'even';
    }

    if ($number % 2 !== 0) {
        return 'odds';
    }

    return null;
}

echo odds_or_even(6) . PHP_EOL;
echo odds_or_even(3) . PHP_EOL;
