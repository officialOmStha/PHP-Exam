<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Math: <input type="number" name="math" required><br>
        Science: <input type="number" name="science" required><br>
        English: <input type="number" name="english" required><br>
        <button type="submit" name="submit" value="inseart">Submit</button>
    </form>
</body>

</html>

<?php
$conn = new mysqli("127.0.0.1", "hr", "oracle123", "Exam_db");

function add($x,$y,$z){
    return $x+$y+$z;
}

function avg($x,$y,$z){
    return ($x + $y + $z)/3;
}
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $math = $_POST["math"];
    $science = $_POST["science"];
    $english = $_POST["english"];


    $insql = $conn->prepare("INSERT INTO Students(name, math, science, english) VALUES(?,?,?,?)");
    $insql->bind_param("siii", $name, $math, $science, $english);
    $insql->execute();


    echo "Data Inserted Successfully.<br>";
    $insql->close();
}

$shosql = "SELECT id, name, math, science, english FROM Students";
$result = $conn->query($shosql);

if ($result->num_rows > 0) {
    echo "<h2>Student Marks:</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Math</th><th>Science</th><th>English</th><th>TOTAL</th><th>Average</th></tr>";
    while ($data = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $data["id"] . "</td>";
        echo "<td>" . $data["name"] . "</td>";
        echo "<td>" . $data["math"] . "</td>";
        echo "<td>" . $data["science"] . "</td>";
        echo "<td>" . $data["english"] . "</td>";
        echo "<td>" . add($data["math"],$data["science"],$data["english"])."</td>";
        echo "<td>" . round(avg($data["math"],$data["science"],$data["english"]), 2)."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}



?>