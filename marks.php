<?php

$marks = 80;

/*
if ($marks >= 80 && $marks <= 100){
    echo "You got A+";
}elseif($marks >= 60 && $marks <= 79){
    echo "You got A";
}elseif($marks >= 50 && $marks <= 59){
    echo "You got B";
}elseif($marks >= 33 && $marks <= 49){
    echo "You got C";
}elseif($marks >= 0 && $marks <= 32){
    echo "You got F";
}else{
    echo "Input invalid number";
	}
*/

switch($marks){
	case($marks >= 80 && $marks <= 100):
	echo "You got A+";
	break;
	
	case($marks >= 60 && $marks <= 79):
	echo "You got A";
	break;
	
	case($marks >= 50 && $marks <= 59):
	echo "You got B";
	break;
	
	case($marks >= 33 && $marks <= 49):
	echo "You got C";
	break;
	
	case($marks >= 0 && $marks <= 32):
	echo "You got F";
	break;
	
	default:
	echo "Input Invalid";
}
?>