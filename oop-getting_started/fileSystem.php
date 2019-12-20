<?php

echo __FILE__ . "<br>";   	//getting file directory with this file name

echo __LINE__ . "<br>";   	//what is the line of this code?

echo __DIR__ . "<br>";    	//getting file directory --not include this file name--


if(file_exists(__DIR__)) {
	
	echo "yes"."<br>";				//if this file exists echo "yes"
	
}


if(is_file(__DIR__)) {
	
	echo "yes"."<br>";				//if this file regular file or not
	
}else {
	
	echo "no"."<br>";				//this is not regular file (like .txt) => php file.
	
}

if(is_dir(__DIR__)) {				//if this directory or not
	
	echo "yes"."<br>";				
	
}else {
	
	echo "no"."<br>";				
	
}


//ternary syntax -> -> -> -> -> -> -> -> ->
echo file_exists(__FILE__) ? "yes" : "no" ;






?>