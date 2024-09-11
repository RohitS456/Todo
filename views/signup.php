<?php include '../Template/header.php'; ?>
<h2>Sign Up</h2>
<form id="signupForm" action="/signup.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
    <button type="submit">Sign Up</button>
</form>
<script src="/assets/js/signup.js"></script>
<?php include '../Template/footer.php'; ?>
