<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessing Credential</title>
</head>
<body>
    <form method="POST">
        User Name : <input type="text" name="user"><br><br>
        Email : <input type="email" name="email"><br><br>
        Password : <input type="password" name="pass"><br><br>
        <button>Check</button>
    </form>

    <?php

        $u = "Om";
        $e = "omstha71@gmail.com";
        $p = "123456789";

        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            $user = $_POST["user"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
        }

        if($user == $u && $email == $e && $pass == $p){
            echo "All credential matched. You can loggin.";
        }else
        {
            echo "Credential didn't match.";
        }
    ?>
    
</body>
</html>