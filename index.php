<?php
include 'db.php';
if(isset($_SESSION['user_id'])){
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🌈 Mood Tracker</h1>
        <p class="intro">Create your account, log in, and start tracking your daily mood in one place.</p>
        <div class="action-links">
            <a class="button" href="login.php">Login</a>
            <a class="button button-secondary" href="register.php">Register</a>
        </div>
    </div>
</body>
</html>