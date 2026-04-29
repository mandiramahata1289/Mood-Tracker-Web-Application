<?php
include 'db.php';
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare('SELECT name FROM users WHERE id = ? LIMIT 1');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$user_name = $user ? $user['name'] : 'User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mood Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <div>
                <h1>Welcome back, <?php echo htmlspecialchars($user_name); ?>!</h1>
                <p>Save your mood and review your recent entries.</p>
            </div>
            <a class="button button-secondary" href="logout.php">Logout</a>
        </div>

        <form action="save_mood.php" method="POST" class="form-card">
            <label for="mood">How are you feeling today?</label>
            <select name="mood" id="mood" required>
                <option value="">Select mood</option>
                <option value="Happy">😊 Happy</option>
                <option value="Sad">😢 Sad</option>
                <option value="Angry">😡 Angry</option>
                <option value="Relaxed">😌 Relaxed</option>
                <option value="Excited">🤩 Excited</option>
                <option value="Anxious">😬 Anxious</option>
            </select>
            <button type="submit">Save Mood</button>
        </form>

        <h2>Your Mood History</h2>
        <table>
            <tr>
                <th>Mood</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php
            $stmt = $conn->prepare('SELECT id, mood, created_at FROM moods WHERE user_id = ? ORDER BY created_at DESC');
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['mood']) . '</td>';
                echo '<td>' . htmlspecialchars($row['created_at']) . '</td>';
                echo '<td><a class="danger-link" href="delete.php?id=' . intval($row['id']) . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>