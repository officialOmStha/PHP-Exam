
<?php
//defining a class in PHP.

class Animal{
    public $type;
    public $name;

    public function info(){
        echo $this->name . " is ". strtolower($this->type) ." animal.";
    }
}
$a = new Animal();
$a->type = "Terrestial";
$a->name = "Lion";
$a->info(); 





?>