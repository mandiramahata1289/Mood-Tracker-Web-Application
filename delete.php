<?php
include 'db.php';
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
if(!isset($_GET['id']) || !ctype_digit($_GET['id'])){
    header('Location: dashboard.php');
    exit;
}
$id = intval($_GET['id']);
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare('DELETE FROM moods WHERE id = ? AND user_id = ?');
$stmt->bind_param('ii', $id, $user_id);
$stmt->execute();
header('Location: dashboard.php');
exit;
?>