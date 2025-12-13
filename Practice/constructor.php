<?php
class lol{
    public $title;
    public $value;

    public function __construct($x,$y){
        $this->title = $x;
        $this->value =$y;
    }

    public function result(){
        echo "<h2>". $this->title . "</h2>";
        echo "<p>". $this->value . "</p>";
    }
}

$tit = "Knock Knock!!";
$val = "Knock Knock!!<br>Who's There<br>You<br>You Who<br>You HUHUHU!!!";

$a = new lol($tit,$val);
$a->result();
?>