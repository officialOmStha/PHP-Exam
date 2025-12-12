<?php
$conn = new mysqli("127.0.0.1", "hr", "oracle123", "Exam_db");


if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<h2> User List: </h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

    while($row = $result->fetch_assoc()){
         echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
              </tr>";
    }
    echo "</table>";
}else{
    echo "No record found.";
}

$conn->close();

?>