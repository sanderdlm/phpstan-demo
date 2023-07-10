<?php

/*
 * 2.
 * unknown methods checked on all expressions (not just $this),
 * validating PHPDocs
 */

class Customer
{
    /**
     * @var int
     */
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }
}

echo (new Customer())->getFirstName();
