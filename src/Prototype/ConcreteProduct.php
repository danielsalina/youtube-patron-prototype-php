<?php

namespace Prototype;

class ConcreteProduct extends ProductPrototype {

    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    // Método de clonación
    public function __clone() {
        // Aquí se puede personalizar el proceso de clonación si es necesario
    }
}
