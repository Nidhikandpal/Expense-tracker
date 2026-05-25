function login(e) {
    e.preventDefault();

    let enteredEmail = document.getElementById("email").value;
    let enteredPassword = document.getElementById("password").value;

    let savedUser = JSON.parse(localStorage.getItem("currentUser"));

    if (
        savedUser &&
        enteredEmail === savedUser.email &&
        enteredPassword === savedUser.password
    ) {
        alert("Login Successful!");
        window.location.href = "dashboard.html";
    } else {
        alert("Invalid Email or Password!");
    }
}
