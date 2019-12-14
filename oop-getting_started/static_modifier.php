<?php

//STATIC MODIFIERS
//you don't need to use instance.

class Cars { 

    public $wheel_count = 4;  
    static $door_count  = 2;

    static function car_detail(){
        echo "<br>";
        $color = "red";
        echo $color;
    }

    function car_color(){

    }
    
}

$bmw = new Cars();          //bmw instance
echo $bmw->wheel_count; 
echo "<br>";
//echo $bmw->$door_count;   //we'r getting error because door_count is static variable.
echo Cars::$door_count;
echo Cars::car_detail();

?>