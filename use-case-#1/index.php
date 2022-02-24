<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//======================================================================================================================
// Array method
//======================================================================================================================

echo 'Use Case #1:'.'<br>';
echo '<br>';

// Create basket
$basketItems = [
    ['product' => 'banana', 'amount' => 6, 'price' => 1, 'vat' => 0.06],
    ['product' => 'apple', 'amount' => 3, 'price' => 1.5, 'vat' => 0.06],
    ['product' => 'wine', 'amount' => 2, 'price' => 10, 'vat' => 0.21],
];

// Calculate total price
$sum = 0;
foreach ($basketItems as $key => $value)
{
    $sum += ($value['amount'] * $value['price']);
}

echo 'Array method:'.'<br>';
echo '<br>';
echo 'Total price:'.'<br>';
echo $sum.'€'.'<br>';
echo '<br>';

// Calculate VAT inside total price
$getTax = 0;
foreach ($basketItems as $key => $value)
{
    $getTax+= ($value['amount'] * $value['price'] * $value['vat']);
}

echo 'Total VAT:'.'<br>';
echo $getTax.'€'.'<br>';
echo '<br><br>';

//======================================================================================================================
// Class method
//======================================================================================================================

require 'Product.php';

$banana = new Product ('banana',6,1,0.06, true);
$apple = new Product ('apple',3,1.5,0.06, true);
$wine = new Product ('wine',2,10,0.21, false);

echo 'Class method:'.'<br>';
echo '<br>';
echo 'Total price:'.'<br>';
echo $banana->getPrice() + $apple->getPrice() + $wine->getPrice().'<br>';
echo '<br>';

echo 'Total vat:'.'<br>';
echo $banana->getTax() + $apple->getTax() + $wine->getTax().'<br>';
echo '<br><br>';

echo 'Use Case #2:'.'<br>';
echo '<br>';
echo 'Total discount:'.'<br>';
echo $banana->getDiscount().'<br>';
echo $apple->getDiscount().'<br>';
echo '<br>';
