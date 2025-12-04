<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <?php
    $myFile = fopen("text.txt", "a") or die("Unable to open file!");
    $txt = "Hello, World\n";
    fwrite($myFile, $txt);
    fclose($myFile);

    //Getting content of a file and presenting it in website.
    $content = file_get_contents("text.txt");
    echo nl2br($content)

    ?>
</body>
</html>