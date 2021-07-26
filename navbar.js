window.addEventListener("DOMContentLoaded", (event) => {
  const open = document.querySelector(".hamburger");
  const close = document.querySelector(".close");
  const nav = document.querySelector("nav");

  open.addEventListener("click", function () {
    open.style.display = "none";
    close.style.display = "block";
    nav.style.left = "0%";
  });

  close.addEventListener("click", function () {
    close.style.display = "none";
    open.style.display = "block";
    nav.style.left = "-100%";
  });
});
