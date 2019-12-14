<?php

//GETTING METHODS INSIDE THE CLASS

class Cars { 
    function gretting(){

    }

    function gretting2(){

    }
    
}

$the_methods = get_class_methods('Cars');  //getting methods which class name is 'Cars'

foreach ($the_methods as $method) {
    echo $method. "<br>";
}



?>