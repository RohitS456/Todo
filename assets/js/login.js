document.getElementById("loginForm").addEventListener("submit", function (e) {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (!email || !password) {
        alert("Please fill out all fields.");
        e.preventDefault();
    } else if (!validateEmail(email)) {
        alert("Please enter a valid email.");
        e.preventDefault();
    }
});

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
