const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector("#nav-menu");
window.onscroll = function () { scrollFunction() };


// ===============HAMBURGER-ICON==============
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

querySelector.addEventListener(".nav-link").forEach(element => {
    element.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    })
});
// ============HAMBURGER-ICON-END=============

// ==============NAV-BAR-ONSCROLL===============
function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30 ) {
        document.getElementById("navbar").style.position = "fixed";
        document.getElementById("navbar").style.zIndex = "4";
        document.getElementById("navbar").style.top = "0%";
        document.getElementById("navbar").style.height = "60px";
        document.getElementById("navbar").style.display = "flex";
        document.getElementById("navbar").style.justifyContent = "space-between";

        document.getElementById("login-container").style.display = "flex";
        document.getElementById("logo").style.fontSize = "25px";
        document.getElementById("logo").style.lineHeight = "60px";
        
        document.getElementsByClassName("nav-list-items").classList.display = ""
        
        
    } else {
        document.getElementById("nav-menu").style.float = "left";
        document.getElementById("navbar").style.height = "80px";
        document.getElementById("navbar").style.top = "3%"; 
        document.getElementById("navbar").style.display = "flex";
        document.getElementById("navbar").style.justifyContent = "space-between";

        document.getElementById("nav-menu").style.height = "80px";
        document.getElementById("nav-menu").style.float = "left";
        document.getElementById("nav-menu").style.justifyContent = "center";
        document.getElementById("nav-menu").style.alignItems = "center";
        document.getElementById("nav-menu").style.flexDirection = "coloumn";

        document.getElementById("logo").style.display = "block";
        document.getElementById("logo").style.fontSize = "35px";
        document.getElementById("logo").style.lineHeight = "80px";
    }
}
// ==============NAV-BAR-ONSCROLL-END===============
