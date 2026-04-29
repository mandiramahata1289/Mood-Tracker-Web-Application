<?php
include 'db.php';
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
if(!isset($_POST['mood']) || trim($_POST['mood']) === ''){
    header('Location: dashboard.php');
    exit;
}
$user_id = $_SESSION['user_id'];
$mood = trim($_POST['mood']);
$stmt = $conn->prepare('INSERT INTO moods (user_id, mood) VALUES (?, ?)');
$stmt->bind_param('is', $user_id, $mood);
$stmt->execute();
header('Location: dashboard.php');
exit;
?>