<?php include '../../Template/header.php'; ?>
<h2>Add New Task</h2>
<form action="/views/tasks/add_task.php" method="POST">
    <input type="text" name="title" placeholder="Task Title" required>
    <textarea name="description" placeholder="Task Description" required></textarea>
    <input type="date" name="due_date" required>
    <select name="status" required>
        <option value="Pending">Pending</option>
        <option value="In Progress">In Progress</option>
        <option value="Completed">Completed</option>
    </select>
    <button type="submit">Add Task</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO tasks (user_id, title, description, due_date, status)
            VALUES ($user_id, '$title', '$description', '$due_date', '$status')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: /views/dashboard.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<?php include '../../Template/footer.php'; ?>
