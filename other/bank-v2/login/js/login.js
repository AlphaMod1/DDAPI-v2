const register = document.querySelector(".register");
const registerbtn = document.querySelector(".register-btn");
const login = document.querySelector(".login");
const loginbtn = document.querySelector(".login-btn");

registerbtn.addEventListener("click", () => {
    register.style.display = "block";
    registerbtn.style.display = "none";
    login.style.display = "none";
    loginbtn.style.display = "block";
});
loginbtn.addEventListener("click", () =>{
    register.style.display = "none";
    registerbtn.style.display = "block";
    login.style.display = "block";
    loginbtn.style.display = "none";
})