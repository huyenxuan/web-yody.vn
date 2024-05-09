const pass = document.getElementById("pass");
const togglePassword = document.getElementById("togglePassword");

togglePassword.addEventListener('click', () => {
    if (pass.getAttribute("type") === "password") {
        pass.setAttribute("type", "text");
        togglePassword.className = "fa-solid fa-eye-slash";
    } else {
        pass.setAttribute("type", "password");
        togglePassword.className = "fa-solid fa-eye";
    }
});
