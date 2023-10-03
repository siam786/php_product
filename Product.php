<?php

/*You are working on a project to create an online shopping cart system. As part of the project, you need to implement a Product class that represents a product in the system. The Product class should have the following properties:

- id (integer type): the unique identifier of the product
- name (string type): the name of the product
- price (float type): the price of the product

In addition to the properties, the Product class should also have the following methods:

1. __construct: a constructor method that takes the id, name, and price as parameters and initializes the corresponding properties of the object.

2. getFormattedPrice: a method that returns the price of the product formatted as a string with two decimal places.

3. showDetails: a method that prints the details of the product (id, name, and formatted price) to the console.

Your task is to write the implementation of the Product class in PHP. Use the provided template code below and fill in the missing parts:

php
class Product {
    // TODO: Add properties

    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
    }

    // TODO: Add getFormattedPrice method


    // TODO: Add showDetails method
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

Expected Output:

Product Details:
- ID: 1
- Name: T-shirt
- Price: $19.99*/
//implement product class
class product {
    //declare properties
    public int $id;
    public string $name;
    public float $price;
    //define constructor
    public function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    //define method getFormattedPrice
    function getFormattedPrice() {
        return number_format($this->price, 2);
    }
    //define method showDetails
    function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: $"."{$this->getFormattedPrice()}\n";
    }
}

$product = new product(1,'T-shirt',19.99);
$product->showDetails();