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

?>
</html>

