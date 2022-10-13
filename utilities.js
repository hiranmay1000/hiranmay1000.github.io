const btn = document.getElementById("login-btn");
btn.addEventListener('click', updateSubs);

function updateSubs() {
  if (btn.textContent.includes('SUBSCRIBE')) {
    btn.textContent = "SUBSCRIBED";
  }else if (btn.textContent.includes('SUBSCRIBED')){
    btn.textContent = "SUBSCRIBE";
  }
}

// ........................==HAMBURGER-ICON.....................
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}));
// .....................HAMBURGER-ICON-END.....................

function myFunction() {
  var x = document.getElementById("nav-menu");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}