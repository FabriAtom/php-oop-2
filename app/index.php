<?php
include_once __DIR__ . '/FoodPet.php';
include_once __DIR__ . '/ToysPet.php';
include_once __DIR__ . '/ClothesPet.php';
include_once __DIR__ . '/trait.php';

$FoodPet = [

    "name" => "crocchette di manzo",
    "description" => "le migliori crocchette sulla piazza",
    "price" => 19.99,
    "weight" => 12,
    "brand" => "baumix", 
    "animale" => "cavallo",
    "ingredienti" => "carne"
];

$food = new FoodPet($FoodPet);
var_dump($food);

$ToysPet = [

    "name" => "giacca antivento",
    "description" => "AS",
    "price" => 25,
    "weight" => 12,
    "brand" =>"AA",
    "animale" => "cavallo",
    "taglia" => "media"
];

$toys = new ToysPet($ToysPet);
var_dump($toys);

$ClothesPet = [
    
    "name" => "guanti per zampe",
    "description" => "i migliori guanti in circolazione",
    "price" => 21.30,
    "weight" => 12,
    "brand" => "AA",
    "animale" => "cavallo",
    "taglia" => "media"

];

$clothes = new ClothesPet($ClothesPet);
var_dump($clothes);


$all=[
    $food,
    $toys,
    $clothes,
];
var_dump($all);


$Cart = new Cart('','', 0);
$total_price = $Cart-> setTotalPrice($all);
var_dump($total_price);

