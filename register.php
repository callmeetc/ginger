<?php
include("db.php");

// Get the submitted username and passwords
$submitted_username = $_POST['name'];
$submitted_password = $_POST['password'];
$submitted_retype_password = $_POST['retype_password'];

if ($submitted_password !== $submitted_retype_password) {
    die("Error: Passwords do not match.");
}

if (empty($submitted_username) || empty($submitted_password) || empty($submitted_retype_password)) {
    die("Error: All fields are required.");
}

// // Hash the password
// $hashed_password = password_hash($submitted_password, PASSWORD_DEFAULT);

// sql connect
$sql = "INSERT INTO users (name, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $submitted_username, $submitted_password);

if ($stmt->execute()) {
    echo "Registration successful! You can now <a href='index.php '>log in</a>.";
} else {
    if ($stmt->errno === 1062) {
        echo "Error: Username already exists.";
    } else {
        echo "Error: " . $stmt->error;
    }
}


$stmt->close();
$conn->close();
?>