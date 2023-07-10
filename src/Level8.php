<?php

/*
 * 8. report calling methods and accessing properties on nullable types
 */

class Price
{
    public function __construct(
        private string $currency
    ) {
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}
class Product
{
    private ?Price $price = null;

    public function getCurrency(): string
    {
        return $this->price->getCurrency();
    }
}

$product = new Product();
echo $product->getCurrency();
