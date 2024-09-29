<?php

require 'vendor/autoload.php';

use Prototype\ConcreteProduct;

// Crear un prototipo de producto
$prototypeProduct = new ConcreteProduct("Laptop", 1000, "Electronics");

// Clonar el prototipo para crear nuevos productos
$product1 = clone $prototypeProduct;
$product2 = clone $prototypeProduct;

// Personalizar los productos clonados
$product1->setName("Laptop Pro");
$product1->setPrice(1500);

$product2->setName("Laptop Basic");
$product2->setPrice(800);

// Mostrar los detalles de los productos
echo $product1->getDetails();
echo $product2->getDetails();
