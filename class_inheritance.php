<?php 


class Cars{
    var $wheel_count; 
    var $door_count = 4;

    function car_detail(){

    return "This Car Has " . $this->door_count . " Doors";
    }
    
}


$bmw =  new Cars();

class Trucks extends Cars{

   var $hilux = "new truck from toyota";
    
}

$hilux = new Trucks();

echo $hilux->door_count=10 . "<br>";

echo $bmw->door_count. "<br>";

echo $bmw->hilux . "<br>";


?>