<?php

/*
 * 0.
 * basic checks, unknown classes, unknown functions,
 * unknown methods called on $this, wrong number of
 * arguments passed to those methods and functions,
 * always undefined variables
 */

function helloWorld(string $name): string
{
    return 'Hello ' . $name . '!';
}

function add(int $number, int $increase): int
{
    return $number + $increase;
}

class Employee
{
    public function __construct()
    {
        echo $this->name;
    }
}

echo helloWordl('John');

echo add(5);

$foobar = new Employee();
