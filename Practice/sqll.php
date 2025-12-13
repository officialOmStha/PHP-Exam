<?php
$conn = new mysqli("127.0.0.1", "hr","oracle123", "Exam_db");

if($conn->connect_error){
    die("Connection Error: ". $conn->connect_error);
}

$disque = "SELECT id, name, email FROM users";
$result = $conn->query($disque);

if($result->num_rows > 0){
    echo "<h1>Users</h1>";

    while($data=$result->fetch_assoc()){
        echo "Id: ".$data["id"]." <br>";
        echo "Name: ".$data["name"]. " <br>";
        echo "Email: ".$data["email"] ."<br>";
    }
}


?>