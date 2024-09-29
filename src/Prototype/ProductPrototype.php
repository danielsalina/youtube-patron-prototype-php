<?php

namespace Prototype;

abstract class ProductPrototype {
    protected $name;
    protected $price;
    protected $category;

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    // Clonación
    abstract public function __clone();

    // Método para obtener detalles del producto
    public function getDetails() {
        return "Producto: $this->name, Precio: $this->price, Categoría: $this->category\n";
    }
}
