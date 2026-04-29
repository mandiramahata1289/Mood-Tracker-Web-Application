<?php
include 'db.php';
if(isset($_SESSION['user_id'])){
    header('Location: dashboard.php');
    exit;
}
$error = '';
if(isset($_POST['login'])){
    $email = trim($_POST['email']);
    $pass = $_POST['password'];

    if($email === '' || $pass === ''){
        $error = 'Please enter both email and password.';
    } else {
        $stmt = $conn->prepare('SELECT id, password, name FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($user && password_verify($pass, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Invalid email or password. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mood Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if($error): ?>
            <div class="message error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="POST" class="form-card">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p class="note">Don't have an account? <a href="register.php">Register here</a>.</p>
    </div>
</body>
</html>