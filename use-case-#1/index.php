<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

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

echo 'Total price:'.'<br>';
echo $sum.'€'.'<br><br>';

// Calculate VAT inside total price
$getTax = 0;
foreach ($basketItems as $key => $value)
{
    $getTax+= ($value['amount'] * $value['price'] * $value['vat']);
}

echo 'Total VAT:'.'<br>';
echo $getTax.'€'.'<br><br>';
