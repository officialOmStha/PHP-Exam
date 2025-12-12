<?php
// Creating function in PHP.

//Function with no parameters.
function greet(){
    echo "Hello, World <br>";
}

//Function with parameter.
function hello($a){
    echo "Hello, ".$a.".<br> ";
}


//multiple parameters.

function sum ($x,$y){
    $sum = $x + $y;
    echo "The sum of ".$x. " and ". $y. " is ". $sum. ".<br>";
} 

//function with return value.

function subtract($x,$y){
    $sub = $x - $y;
    return $sub;
}

//calling a function
greet();
hello("Beautiful");
sum(8,9);
echo "The subtraction of 5 and 4 is: ".(subtract(5,4)). "<br>";

?>