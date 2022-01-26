<?php 


class Cars{
    
  function gretting(){
     
      echo "HELO WORLD";
  } 
    
    
function gretting_From_Toyota(){
     
      echo "HELO I'm Toyota Hilux 22 Model";
  }     
    
    
    
}

$toyota = new Cars(); //object or instance of the class Cars
$bmw = new Cars(); 

$toyota->gretting();



?>