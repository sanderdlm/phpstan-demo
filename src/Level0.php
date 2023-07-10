<?php

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
