<?php
class ShoppingCart {
    private $items;
    private $total;

    public function __construct() {
        $this->items = [];
        $this->total = 0;
    }

    public function addItem($item, $price) {
        $this->items[$item] = $price;
        $this->total += $price;
    }

    public function getTotal() {
        return $this->total;
    }
}

$cart = new ShoppingCart();

$cart->addItem("Product 1", 20);
$cart->addItem("Product 2", 30);
$cart->addItem("Product 3", 10);

$total = $cart->getTotal();
echo "Total cost: $" . $total;

?>
