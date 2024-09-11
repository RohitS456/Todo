document.getElementById("signupForm").addEventListener("submit", function (e) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        e.preventDefault();
    } else if (password !== confirmPassword) {
        alert("Passwords do not match.");
        e.preventDefault();
    }
});
