<?php 
    
    //PHP GETTER AND SETTER METHODS
    //setter metodlar ile ayarlamalar yaparız.
    //getter metodlar ise set ettiğimiz değerleri almamızı sağlar.

    class Cars{
        
        Private $door_count = 4;

        function get_values(){
            echo $this->door_count;
            echo "<br>";
        }

        function set_values(){
            echo $this->door_count =10;
            echo "<br>";
        }

    }

    $bmw = new Cars();
    $bmw->get_values();
    $bmw->set_values();     //Artık door_count = 10 olacaktır.
    $bmw->get_values();     //get_values() deyince de 10 'a ulaşacağız. Çünkü değer değişti.

?>