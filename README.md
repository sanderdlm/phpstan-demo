# PHPStan demo

## Basic usage
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