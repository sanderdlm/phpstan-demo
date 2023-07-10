<?php

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