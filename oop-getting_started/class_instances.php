<?php

//GETTING METHODS INSIDE THE CLASS
//instance = örnek,oluşum demektir

class Cars { 

    function gretting(){
        echo "Hello World";
    }
    
}

$audi = new Cars();      //audi instances
$mercedes = new Cars();  //mercedes instances

$audi -> gretting();     //automatically method activated by this code


?>