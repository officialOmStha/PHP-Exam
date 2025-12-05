<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name: <input type="text" name="name">
        <button>Submit</button>
    </form>
    <?php
    $coo = "user";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        setcookie($coo,$name, time() + (86400*30), "/");
    }

    if(!isset($_COOKIE[$coo])){
        echo "Cookie named ". $coo . " is not set. <br>";
    }else{
        echo "Cookie named ". $coo . " is set.<br>";
        echo "Its value is: ". $name;
    }
    ?>
</body>
</html>

