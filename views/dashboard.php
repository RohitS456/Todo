<?php
include '../Template/header.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /login.php");
    exit;
}
?>

<h2>Dashboard</h2>
<a href="/views/tasks/add_task.php">Add Task</a>

<?php
// Fetch user's tasks
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM tasks WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['title']} - {$row['status']}
              <a href='/views/tasks/edit_task.php?id={$row['id']}'>Edit</a>
              <a href='/views/tasks/delete_task.php?id={$row['id']}'>Delete</a></li>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}
?>

<?php include '../Template/footer.php'; ?>
