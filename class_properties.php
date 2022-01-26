<?php 


class Cars{
    var $wheel_count; //this is a variable called property of the class now
    var $door_count = 4;

    function car_detail(){

    return "This Car Has " . $this->door_count . " Doors";
    }
    
}

$toyota = new Cars(); //object or instance of the class Cars
$bmw = new Cars(); 

$toyota->wheel_count=10 ."<br>";
//echo $bmw->door_count=10;
echo "<br>";
echo $toyota->wheel_count;

echo $bmw->car_detail();



?>