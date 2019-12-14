<?php

//STATIC MODIFIERS
//you don't need to use instance.
//STATIC : SELF AND PARENT USAGE

class Cars { 

    static $wheel_count = 4;  

    static function car_detail(){
        return self::$wheel_count;
    }
    
}


class Trucks extends Cars{

    static function display(){
        echo parent::car_detail();
    }

}

Trucks::display();

?>