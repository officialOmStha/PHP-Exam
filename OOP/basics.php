<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP With  PHP</title>
</head>
<body>

    <?php
        class Animal{
         public $name;
         public $sound;

         function set_name($x){
            $this->name = $x;
         }

         function set_sound($y){
            $this->sound = $y;
         }

         function result(){
            echo $this->name ." makes ". $this->sound. " sound. <br>";
         }
        } 
        $x = new Animal();
        $x->set_name("Dog");
        $x-> set_sound("Barking");
        $x->result();

        $y = new Animal();
        $y->set_name("Cat");
        $y-> set_sound("Meow");
        $y->result();
    ?>
</body>
</html>