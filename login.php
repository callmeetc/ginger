<?php
include("db.php");


$submitted_username = $_POST['name'];
$submitted_password = $_POST['password'];


$sql = "SELECT * FROM users WHERE name = ?";
$stmt = $conn->prepare(query: $sql);
$stmt->bind_param("s", $submitted_username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verify the password
    if ($submitted_password == $user['password']) {
        echo "Login successful! Welcome, " . htmlspecialchars(string: $user['name']) . ".";
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that username.";
}

$stmt->close();
$conn->close();
?>