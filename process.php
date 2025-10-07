<?php
// Start the session
session_start();

// Capture username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if username and password are correct
if ($username === 'Viet' && $password === '105697481') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    header('Location: login.php?error=1');
    exit();
}
?>