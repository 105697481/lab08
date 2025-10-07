<?php 
$pageTitle = "Login - Lab08 Application";
include 'header.inc'; 
?>

<div class="container">
    <h2>Login</h2>
    
    <?php if (isset($_GET['error'])): ?>
        <div class="error">Invalid username or password. Please try again.</div>
    <?php endif; ?>
    
    <form action="process.php" method="POST">
        <input type="hidden" name="user_token" value="V105697481">
        
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <input type="submit" value="Login">
    </form>
</div>

<?php include 'footer.inc'; ?>