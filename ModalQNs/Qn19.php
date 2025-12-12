<?php
// Program to display vowels from a file.

$file = fopen("text.txt", "r");

if($file){
    while(!feof($file)){
        $char = fgetc($file);
        $cha = strtolower($char);
        if ($cha == "a" || $cha == "e" || $cha == "i" || $cha == "o" || $cha == "u"){
            echo $cha. ", ";
        }
    }
    fclose($file);

}
?>