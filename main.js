const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector("#nav-menu");
window.onscroll = function () { scrollFunction() };


// ==============================HAMBURGER-ICON=================================
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}));
// ===========================HAMBURGER-ICON-END================================



// // ============================NAV-BAR-HIDE-ONSCROLL============================
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function () {
//     var currentScrollPos = window.pageYOffset;
//     if (prevScrollpos > currentScrollPos) {
//         document.getElementById("navbar").style.top = "0px";
//     } else {
//         document.getElementById("navbar").style.top = "-80px";
//     }
//     prevScrollpos = currentScrollPos;
// }
// // =========================NAV-BAR-HIDE-ONSCROLL-END===========================



// ============================NAV-BAR-ONSCROLL=================================
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.position = "fixed";
        document.getElementById("navbar").style.zIndex = "4";
        document.getElementById("navbar").style.top = "0%";
        document.getElementById("navbar").style.height = "45px";
        // document.getElementById("navbar").style.display = "flex";
        // document.getElementById("navbar").style.justifyContent = "space-between";


        // document.getElementById("login-container").style.display = "flex";
        // document.getElementById("login-container").style.alignItems = "center";
        // document.getElementById("login-container").style.justifyContent = "center";
        document.getElementById("login-container").style.height = "45px";

        document.getElementById("login-btn").style.width = "70px";
        document.getElementById("login-btn").style.height = "25px";

        // document.getElementById("nav-menu").style.height = "45px";

        document.getElementById("logo").style.fontSize = "22px";
        document.getElementById("logo").style.lineHeight = "45px";

        ["link1", "link2", "link3", "link4", "link5"].forEach(function (id) {
            document.getElementById(id).style.lineHeight = "45px";
            document.getElementById(id).style.fontSize = "12px";
        });

        ["bar-resize1", "bar-resize2", "bar-resize3"].forEach(function (id) {
            document.getElementById(id).style.width = "22px";
            document.getElementById(id).style.margin = "2px";
        });

        document.getElementById("aboutme-display-page").style.top = "80px";

    } else {

        document.getElementById("navbar").style.height = "80px";
        document.getElementById("navbar").style.top = "25px";
        // document.getElementById("navbar").style.display = "flex";
        document.getElementById("navbar").style.alignItems = "center";
        // document.getElementById("navbar").style.justifyContent = "space-between";

        // document.getElementById("login-container").style.display = "flex";
        // document.getElementById("login-container").style.width = "280px";
        document.getElementById("login-btn").style.width = "85px";
        document.getElementById("login-btn").style.height = "38px";

        // document.getElementById("nav-menu").style.height = "80px";
        // document.getElementById("nav-menu").style.justifyContent = "center";
        // document.getElementById("nav-menu").style.alignItems = "center";
        // document.getElementById("nav-menu").style.flexDirection = "coloumn";

        document.getElementById("logo").style.fontSize = "32px";
        document.getElementById("logo").style.lineHeight = "80px";

        ["link1", "link2", "link3", "link4", "link5"].forEach(function (id) {
            document.getElementById(id).style.lineHeight = "80px";
            document.getElementById(id).style.fontSize = "16px";
        });

        ["bar-resize1", "bar-resize2", "bar-resize3"].forEach(function (id) {
            document.getElementById(id).style.width = "25px";
            document.getElementById(id).style.margin = "3px";
        });

        document.getElementById("aboutme-display-page").style.top = "80px";

    }
}
// ============================NAV-BAR-ONSCROLL-END=============================
