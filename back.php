<?php
session_start();
// Connect to your database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate and sanitize user input
    
    // Check if username and password are correct from your database
    if ($username === 'exampleuser' && $password === 'examplepassword') {
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        echo 'Invalid credentials';
    }
}
?>