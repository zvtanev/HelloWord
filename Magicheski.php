<?php

class Animal{
    
    public $animal = "kuche";
    private $novapromen = array();
    
    public function __set($name, $value) {
        $this->novapromen[$name] = $value;
    }
    
    public function __get($name) {
        echo $name ." ".$this->novapromen[$name];
    }
    
    public function __call($name, $arguments) {
        echo $name ."<br/>". $arguments[0]."<br/>". $arguments[1];
    }
}

$givotno = new Animal();
echo $givotno->animal;
echo "<br/>";
$givotno->godini = 20;
$givotno->kozina = "biala";
echo $givotno->godini;
echo "<br/>";
echo $givotno->kozina;
echo "<br/>";
$givotno->habala(29, "Ivan");
