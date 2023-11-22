<!-- A basket contains the following things:

Banana's (6 pieces, costing €1 each)
Apples (3 pieces, costing €1.5 each)
Bottles of wine (2 bottles, costing €10 each)
Without using classes, do the following in your code:

Calculate the total price
Calculate how much of the total price is tax (fruit goes at 6%, wine is 21%)
Next, do the same with classes. 
What style do you prefer? Do you notice any difference in time needed to code, 
structure or readability? From now on, if nothing is stated specifically, 
it's recommended to use classes. -->

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

    public function __construct($quantity, $price) {
        $this->quantity = $quantity;
        $this->price = $price;
    }

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
