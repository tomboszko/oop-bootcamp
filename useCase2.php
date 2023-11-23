<!-- Use Case #2
Consider the same basket as in use case 1. done
The shop owner wants to have a way to have 50% off every fruit. 
Can you find a way to implement the discount once, 
and re-use it efficiently for every fruit? -->

<?php

// class
class Basket {
    public $quantity;
    public $price;
    public $type;
    public $productName;
// constructor
    public function __construct( string $productName, int $quantity, float $price, string $type) {
        $this->productName = $productName;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->type = $type; // added type to differenciate between fruits and wine.
    }
// method(s)
    public function getTotal() {
        return $this->quantity * $this->price;
        if ($this->type == "fruit") {
            return $this->quantity * $this->price * 0.5; //aplly discount
        }
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getType() {
        return $this->type;
    }
}
// Instantiate object(s)
$bananas = new Basket("banana",6, 1, "fruit");
$apples = new Basket("apple",3, 1.5, "fruit");
$wine = new Basket("wine",2, 10, "drink");

//  total price
$total_price = $bananas->getTotal() + $apples->getTotal() + $wine->getTotal();

//print

// Create an array of products
$products = array($bananas, $apples, $wine);

// Display list of products
echo "Product List:<br>";
$total_price = 0;
foreach ($products as $product) {
    $discount = $product->type == "fruit" ? '50%' : 'No discount';
    $total_price_for_product = $product->getTotal();
    $total_price += $total_price_for_product;
    echo "- " . $product->getProductName() . ", Price: " . $product->price . ", " . $discount . ", Total: " . $total_price_for_product . "<br>";
}
echo "Total price: " . $total_price . "<br>";



