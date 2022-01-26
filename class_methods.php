<?php 


class Cars{
    
  function gretting(){
     
      
  } 
    
    function gretting2(){
     echo "HELLO";
      
  } 
    
    
}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $test){
    
    
    echo $test . "<br>";
    
}



?>