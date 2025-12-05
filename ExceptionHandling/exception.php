<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Handling</title>
</head>

<body>
    <form method="POST">
        Numerator: <input type="text" name="nume"><br>
        Denominator: <input type="text" name="deno"><br>
        <button>Submit</button>
    </form>

    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = (int)$_POST["nume"];
        $d = (int)$_POST["deno"];

        try {
            if ($d == 0) {
                throw new Exception("Cannot divide by zero");
            }
            $ans = (int)$n / (int)$d;
            echo "The answer is : " . $ans . "<br>";
        } catch (Exception $e) {
            echo "Error :" . $e->getMessage();
        }
    }
    ?>
</body>

</html>