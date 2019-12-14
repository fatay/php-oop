<?php

//PUBLIC,PROTECTED AND PRIVATE ACCESS TYPES
//instance = örnek,oluşum demektir

class Cars { 

    public     $wheel_count = 4;   //you can access everywhere.
    private    $door_count  = 4;   //you can only access inside the 'Cars' class.
    protected  $seat_count  = 2;   //can only access inside the 'Cars' AND classes that extends 'Cars' class.
    //korunan = protected

    function car_detail(){
        echo $this->wheel_count;
        echo "<br>";
        echo $this->door_count;
        echo "<br>";
        echo $this->seat_count;
        echo "<br>";
    }
    
}

$bmw = new Cars();      //bmw instance

//echo $bmw->wheel_count;   v we can access everywhere.
//echo $bmw->door_count;    x cant access.
//echo $bmw->seat_count;    x cant access.

echo $bmw->car_detail();   
//private and protected variables = door_count, seat_count
//we can only access this variables on the car_detail methods.

?>