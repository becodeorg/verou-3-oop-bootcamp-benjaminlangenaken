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
    public bool $isFruit;

    function __construct(string $name, int $amount, float $price, float $vat, bool $isFruit)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->vat = $vat;
        $this->isFruit = $isFruit;
    }

    public function getPrice(): float
    {
        return $this->amount * $this->price;
    }

    public function getTax(): float
    {
        return $this->amount * $this->price * $this->vat;
    }

    public function getDiscount(): string
    {
        $discount = 0;
        if ($this->isFruit === true) {
            $calculateDiscount = $this->amount * 0.5;
            $discount = "The discount on all {$this->name}s is {$calculateDiscount}€";
        }
        return $discount;
    }
}
