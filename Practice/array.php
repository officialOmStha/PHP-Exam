<?php

$list =[15, 24, 32, 46, 57, 69, 72, 83, 90, 10];


$sum = 0;

for($i = 0; $i<=9; $i++){
    $sum = $sum + $list[$i];
}

echo "The sum of numbers is: ".$sum.". <br>";
echo "The average of numbers is: ".$sum/count($list).". <br>";

?>