<?php
include_once __DIR__ . '/product.php';
include_once __DIR__ . '/trait.php';

class ToysPet extends Product {
        use animale;
        public $taglia;
    
        public function __construct($param){
            parent:: __construct($param);
            $this->setAnimale($param['animale']);
            $this->taglia = $param['taglia'];
        }  
}
