<?php

/*
 * 6. report missing typehints
 */

class Friend
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

echo (new Friend('John'))->getName();
