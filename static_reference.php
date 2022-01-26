<?php 


class Cars{
    
    static $wheel_count = 33; 
    static $door_count = 4;
    

   static function car_detail(){
     echo self:: $wheel_count;
    echo self:: $door_count;
       
   
    }
    
}


//$bmw =  new Cars();
//echo Cars:: car_detail();


class Trucks extends Cars{
    
   static function display(){
       
       echo parent::car_detail();
       
       
   } 
    
}

Trucks::display();


?>