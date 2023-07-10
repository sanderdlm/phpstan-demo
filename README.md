# PHPStan demo

This repository contains short, easy-to-understand examples of all errors that PHPStan reports, grouped per level.

It can be used to gradually introduce people or teams to what PHPStan has to offer.
## Basic usage
Each file in /src holds a few lines of PHP code that will trigger the exact errors PHPStan complains about at that level.

Run PHPStan with:
```
./vendor/bin/phpstan analyze src/ --level=0
```
Change the level and see the errors from each of the demo files.


## Composer script
```
composer analyze
```
Hardcoded at level 0 in `composer.json` under `scripts`.
## With config file
```
./vendor/bin/phpstan
```
Hardcoded at level 9 in `phpstan.neon.dist` under `parameters`.