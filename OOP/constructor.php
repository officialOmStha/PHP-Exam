<?php
class Fruit{
    public $name;
    public $color;

    function __construct($n,$c){
        $this->name = $n;
        $this->color = $c;
    }

    function result(){
        echo "The fruit is ".$this->name . " and it is ". $this->color.".<br>";
    }
}

$a = new Fruit("Apple", "Red");
$a->result();

$b = new Fruit("Mango" ,"Yellow Red");
$b->result();

?>