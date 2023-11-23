<!-- Use Case #2
Consider the same basket as in use case 1. 
The shop owner wants to have a way to have 50% off every fruit. 
Can you find a way to implement the discount once, 
and re-use it efficiently for every fruit? -->

<?php

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