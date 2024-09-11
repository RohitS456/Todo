<?php include '../Template/header.php'; ?>
<h2>Login</h2>
<form id="loginForm" action="/login.php" method="POST">
    <input type="email" id="email" name="email" placeholder="Email" required>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<script src="/assets/js/login.js"></script>
<?php include '../Template/footer.php'; ?>
