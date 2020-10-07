const register = document.querySelector(".register");
const registerbtn = document.querySelector(".register-btn");
const login = document.querySelector(".login");

registerbtn.addEventListener("click", () => {
    register.style.display = "block";
    registerbtn.style.display = "none";
    login.style.display = "none";
});