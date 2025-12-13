<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert & Retrive</title>
</head>
<body>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit" name="submit" value="Insert Data">Submit</button>
    </form>
</body>
</html>

<?php
$conn = new mysqli("127.0.0.1", "hr", "oracle123","Exam_db");


if($conn->connect_error){
    die("Connection Error: ". $conn->connect_error);
}

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("INSERT INTO users(name, email) VALUES(?,?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();

    echo "Data Inserted Successfully.<br>";
    $stmt->close();
}

$disp = "SELECT id, name, email FROM users";
$result = $conn->query($disp);

if ($result->num_rows > 0){
    echo 
    "
    <h2> Users </h2>
    <table border='1'>
    <tr>
    <th>No. </th>
    <th>Name</th>
    <th>Email</th>
    </tr>
    ";

    while($row =$result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["email"]."</td
        </tr>";
    }
    echo "</table>";
}



?>