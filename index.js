const headingValue=document.getElementById("headingOfForm");
const login=document.getElementById("loginclick");
const register=document.getElementById("registerclick");
login.addEventListener("click",()=>{
    headingValue.textContent="Login Form"
}
);
register.addEventListener("click",()=>{
    headingValue.textContent="Register Form"
}
);