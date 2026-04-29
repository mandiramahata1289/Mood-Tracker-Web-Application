<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'mood_db');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>