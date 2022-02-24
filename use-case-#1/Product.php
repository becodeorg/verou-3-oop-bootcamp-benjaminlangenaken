<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Product
{
    public string $name;
    public int $amount;
    public float $price;
    public float $vat;

    function __construct(string $name, int $amount, float $price, float $vat)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->vat = $vat;
    }

    public function getPrice(): float
    {
        return $this->amount * $this->price;
    }

    public function getTax(): float
    {
        return $this->amount * $this->price * $this->vat;
    }
}
