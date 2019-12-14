<?php

class Cars{
    public $wheel_count = 4;
    
    function __construct(){
        //this method calling automatically
        //we use this method for a default/init settings

        echo $this->wheel_count;
    }
}

$toyota = new Cars();  //while this instance crating; constructur method works-automatically

?>