<!-- Use Case #2
Consider the same basket as in use case 1. 
The shop owner wants to have a way to have 50% off every fruit. 
Can you find a way to implement the discount once, 
and re-use it efficiently for every fruit? -->

<?php

$bananas_Q = 6;
$bananas_P = 1;
$apples_Q = 3;
$apples_P = 1.5;
$wine_Q = 2;
$wine_P= 10;

// Calculate total price
$bananas_total = $bananas_Q* $bananas_P;
$apples_total = $apples_Q* $apples_P;
$wine_total = $wine_Q * $wine_P;

// Calculate final total price
$total_price = $bananas_total + $apples_total + $wine_total;

echo "Total price: " . $total_price . " $" . "<br>";

// tax rates
$fruit_tax_rate = 0.06;
$wine_tax_rate = 0.21;

// tax for each item
$bananas_tax = $bananas_total * $fruit_tax_rate;
$apples_tax = $apples_total * $fruit_tax_rate;
$wine_tax = $wine_total * $wine_tax_rate;

// Calculate total tax
$total_tax = $bananas_tax + $apples_tax + $wine_tax;

echo "Total tax: " . $total_tax . " $" . "<br>";
echo "Total price with tax: " . ($total_price + $total_tax) . " $" . "<br>";
echo "with classes: <br>";

// class
class Basket {
    public $quantity;
    public $price;
// constructor
    public function __construct($quantity, $price) {
        $this->quantity = $quantity;
        $this->price = $price;
    }
// method
    public function getTotal() {
        return $this->quantity * $this->price;
    }
}
// Instantiate object(s)
$bananas = new Basket(6, 1);
$apples = new Basket(3, 1.5);
$wine = new Basket(2, 10);

//  total price
$total_price = $bananas->getTotal() + $apples->getTotal() + $wine->getTotal();

echo "Total price: " . $total_price . " $" . "<br>";