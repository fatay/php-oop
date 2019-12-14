<?php

//DEFINING THE CLASS

class Cars { 
    //class variable definitions
    //methods & functions
    
}

$my_classes = get_declared_classes(); //getting all classes
foreach ($my_classes as $class) {
    echo $class . "<br/>";            //all the classes definated by PHP
}




?>