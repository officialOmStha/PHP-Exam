<html>

<?php
define("PI", 3.14); // this is one way to define a constant datatype is float.

$age = 21; //this is a variable with integer datatype
$greet = "Hello, I am "; //this is a variable with string datatype
$name = "Om Shrestha"; //this is a variable with string datatype

echo ($greet . $name . " And I am ". $age . " years old. <br>"); //echo is used to display result.
var_dump($age); // var_dump gives us datatype and (value), 
var_dump($name); // var_dump gives us datatype, (length) and value. length for stings only.
var_dump(PI); // can be used for constants too.
echo "<br>". PI; // using <br> in echo for line breaking.
echo "<br>". pi(); // using inbuilt php function to get value of PI.

// if statements

if(5 > 3) {
    echo "<br>I am the best. <br>";
}

if (3 > 5){
    echo "<br>I am the worst. <br>";
}

// switch statements
switch ($age){
    case 20 :
        echo $name . " is 20 years old";
        break;
    case 21 :
        echo $name . " is 21 years old";
        break;
    default:
        echo $name . "'s age is unknown";
    
}

// Loops in php
for($i = 1; $i <= 5; $i++){
    echo $i . ". I am enjoying php. <br>";
}



?>
</html>

