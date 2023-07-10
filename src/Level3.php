<?php

class Person
{
	private int $name;
	
	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): int
	{
		return strtolower($this->name);
	}
}

echo (new Person('John'))->getName();