<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$pageTitle = "Welcome - Lab08 Application";
include 'header.inc';
?>

<div class="container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
    <p>You have successfully logged in.</p>
    <p><a href="logout.php" style="color: #007bff; text-decoration: none;">Logout</a></p>
</div>

<?php include 'footer.inc'; ?>