<?php


class SimpleClas{
    public $promenliva ;
    
    public function __construct($a){
        $this->promenliva = $a;
    }
    
    protected function PokagiTova(){
        echo $this->promenliva;
    }
}

class ExtendKlas extends SimpleClas {
    
    public function __construct($predavam){
        $this->promenliva = "Gosho";
        parent::__construct($predavam);
    }
    
    public function PokagiTova(){
        echo "pokazva prezapisania metod i promenliva " ;
        parent::PokagiTova();
    }
}


$tazi = new ExtendKlas("Pesho");
$tazi->PokagiTova();