<?php 


class Cars{
    
    public $wheel_count=3; 
    private $door_count = 4;
    protected $seat_count = 4; //only accessable inside this class and any class that inherites this class

    function car_detail(){
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
   
    }
    
}


$bmw =  new Cars();
//
//$bmw->car_detail();

class Toyota extends Cars{
    
    
    
}


$hilux = new Toyota();

echo $hilux->seat_count;



?>