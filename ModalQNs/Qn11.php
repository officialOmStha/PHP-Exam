<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Qn Solve</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="get">
        <button>get</button>
    </form>
    <br><br>
    <form method="POST">
        <input type="text" name="post">
        <button>post</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]== "GET"){
            $get = $_GET["get"];
            echo "The message from get method:<br>". $get;
        }

        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $post = $_POST["post"];
            echo "The message from get method:<br>".$post;
        }

        //Result shows when using GET method input is seen in url.
        //But when POST method is used input is not seen in url. it is more sucured.
    ?>

</body>
</html>