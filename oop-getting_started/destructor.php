<?php

//static means: one memory cell area used by one variable!! - constant value -

class Cars{
    public $wheel_count = 4;
    static $door_count  = 4;
    
    function __construct(){
        //this method calling automatically
        //we use this method for a default/init settings
        echo self::$door_count++;
    }

    function __destruct(){
        //this method calling automatically
        //we use this method for a default/init settings
        echo self::$door_count--;
    }
}

//while this instance crating; constructur method works-automatically

$toyota1 = new Cars();
$toyota2 = new Cars(); 
$toyota3 = new Cars();
?>