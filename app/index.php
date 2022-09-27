<?php
include_once __DIR__ . '/FoodPet.php';
include_once __DIR__ . '/ToysPet.php';
include_once __DIR__ . '/ClothesPet.php';

$FoodPet = [
    "name" => "crocchette di manzo",
    "description" => "le migliori crocchette sulla piazza",
    "price" => 19.99,
    "weight" => 12,
    "brand" => "baumix"
    
];

$food = new FoodPet($FoodPet);
var_dump($food);

$ToysPet = [

    "name" => "guanti per micio",
    "description" => "AS",
    "price" => 25,
    "weight" => 12,
    "brand" =>"AA"
];

$toys = new ToysPet($ToysPet);
var_dump($toys);

$ClothesPet = [
    
    "name" => "guanti per zampe",
    "description" => "i migliori guanti in circolazione",
    "price" => 21.30,
    "weight" => 12,
    "brand" => "AA"

];

$clothes = new ClothesPet($ClothesPet);
var_dump($clothes);





$all=[
    $food,
    $toys,
    $clothes,
];
var_dump($all);

$Shop = new Shop('','', 0);
$total_price = $Shop->setTotalPrice($all);
var_dump($total_price);

