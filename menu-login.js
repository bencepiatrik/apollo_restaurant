window.addEventListener("DOMContentLoaded", function () {
  const loginBtn = document.querySelector(".login-btn-click");
  const loginForm = document.querySelector("#login-form");
  const closeLoginBtn = document.querySelector(".cancelbtn");
  const shadow = document.querySelector('.shadow');

  loginBtn.addEventListener("click", function () {
    loginForm.style.left = "50%";
    shadow.style.filter = 'blur(2px)'
  });

  closeLoginBtn.addEventListener("click", function () {
    loginForm.style.left = "-50%";
    shadow.style.filter = 'blur(0px)'


  });
});