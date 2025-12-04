<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["password"];

        if(isset($name) && isset($email) && isset($pass)){
            echo $name . "<br>";
            echo $email . "<br>";
            echo $pass . "<br>";
        }

    ?>


</body>
</html>