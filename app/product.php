<?php

class Product {
    public $name;
    public $price;
    public $description;
    public $weight;
    public $brand;


    function __construct($param)
    {
        $this-> name = $param['name'];
        $this-> price = $param['price'];
        $this-> description = $param['description'];
        $this-> weight = $param['weight'];
        $this-> brand = $param['brand'];
    }
};

class Cart {
    public $name;
    public $email;
    public $productNumber;
    public $TotalPrice;

    function __construct($name, $email, $productNumber) 
    {
        $this-> name = $name;
        $this-> email = $email;
        $this-> productNumber = $productNumber;
    }
    
    function setTotalPrice($products){
        $this->TotalPrice = 0;
        foreach($products as $product){
          $this->TotalPrice += $product->price;  
        }
        return $this->TotalPrice;
    }
};

?>