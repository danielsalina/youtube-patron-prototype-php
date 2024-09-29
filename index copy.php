<?php

class Product {
    private $name;
    private $price;
    private $category;

    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getDetails() {
        return "Producto: $this->name, Precio: $this->price, Categoría: $this->category\n";
    }
}

$product1 = new Product("Laptop", 1000, "Electronics");
$product2 = new Product("Tablet", 600, "Electronics");

echo $product1->getDetails();
echo $product2->getDetails();
