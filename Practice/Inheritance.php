<?php
class animal{
    public $type;
    
    public function ani(){
        echo "Result from animal class. type is ". $this->type.".<br>";
    }

}

class tiger extends animal{
    public $name;

    public function tig(){
        echo "Result from tiger class. Type : ". $this->type." and Name : ". $this->name .".<br>";
    }
}

$anim = new animal();
$anim->type = "aquatic";
$anim->ani();

$a = new tiger();
$a->type = "terrestial";
$a->ani();
$a->name="Bangal Tiger";
$a->tig();
?>