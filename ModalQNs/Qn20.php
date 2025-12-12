<?php
// Connect to database
$conn = new mysqli("127.0.0.1", "hr", "oracle123", "Exam_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepared statement (safe against SQL injection)
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();

    echo "Record inserted successfully!";
    $stmt->close();
}

$conn->close();
?>

<!-- HTML Form -->
<form method="POST" action="">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" name="submit" value="Insert Data">
</form>
