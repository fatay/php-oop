<?php

//GETTING METHODS INSIDE THE CLASS
//instance = örnek,oluşum demektir

class Cars { 

    var $wheel_count = 4;   //if u are inside the class you must be add 'var' word.
    var $door_count  = 2;

    function car_detail(){
        return "This car has " . $this->door_count ." doors.";
    }
    
}

$audi = new Cars();      //audi instances
$mercedes = new Cars();  //mercedes instances

echo $audi -> wheel_count ."<br>";
echo $mercedes -> wheel_count = 8 ."<br>";   //we can change them.

echo $audi -> car_detail();



?>