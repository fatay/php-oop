<?php 
// INHERITANCE (KALITIM)
//Bir classın parentlerinin niteliklerinden alması demektir.

class Cars {

    var $wheels = 4;

    function gretting(){
        return "hello i am a car function";
    }

}   

class Trucks extends Cars{
    var $wheels = 6; //overrides the cars 's wheels variable
}

$tacoma = new Trucks();
echo $tacoma->wheels;
echo "<br>";
echo $tacoma->gretting();

?>