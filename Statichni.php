<?php

class Broiki{
    
    public static $broiki = 25;
}


class Chisla extends Broiki {
    
    private static $num = 3;
    
    public static function VzemiChislo(){
        echo self::$num;
    }
    
    public static function SetNum($n){
        self::$num = $n;
    }
    
    public function GetNum(){
        echo self::$num;
    }
}


$a = new Chisla();
$b = new Chisla();
$a->GetNum();
echo "<br/>";
$b->GetNum();
echo "<br/>";
Chisla::SetNum(25);
$a->GetNum();
echo "<br/>";
$b->GetNum();
echo "<br/>";
