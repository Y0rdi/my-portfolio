<?php
session_start();
require 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $username, $email, $password_hash);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Registration successful!";
        header('Location: index.php'); 
        exit;
    } else {
        $_SESSION['error'] = "Registration failed. Please try again.";
    }
}

header('Location: welcome.php'); 
exit;
?>
