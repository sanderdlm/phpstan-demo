<?php

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