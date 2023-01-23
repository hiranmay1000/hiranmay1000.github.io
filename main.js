window.onscroll = function () { scrollFunction() };

// ........................PRE-LOADER........................=*/
var loader = document.getElementById("preloader");
window.addEventListener("load", removePreLoader());

function removePreLoader() {
    loader.style.display = "none";
}
// ........................PRE-LOADER-END......................*/


//.....................NAV-BAR-HIDE-ONSCROLL..................

// function scrollFunction() {
//     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//         document.getElementById("navbar").style.top = "0px";
//         var prevScrollpos = window.pageYOffset;
//         window.onscroll = function () {
//             var currentScrollPos = window.pageYOffset;
//             if (prevScrollpos > currentScrollPos) {
//                 document.getElementById("navbar").style.top = "25px";
//             } else {
//                 document.getElementById("navbar").style.top = "-80px";
//             }
//             prevScrollpos = currentScrollPos;
//         }
//     } else {
//         document.getElementById("navbar").style.top = "0px";
//         var prevScrollpos = window.pageYOffset;
//         window.onscroll = function () {
//             var currentScrollPos = window.pageYOffset;
//             if (prevScrollpos > currentScrollPos) {
//                 document.getElementById("navbar").style.top = "25px";
//             } else {
//                 document.getElementById("navbar").style.top = "-75px";
//             }
//             prevScrollpos = currentScrollPos;
//         }
//     }
// }

// // =========================NAV-BAR-HIDE-ONSCROLL-END===========================



// ============================NAV-BAR-ONSCROLL=================================
function scrollFunction() {

    // // .................ONSCROLL-PROGRESS-BAR...................
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("mybar").style.width = scrolled + "%";
    document.getElementById("prog-container").style.zIndex = "50";
    // ..................ONSCROLL-PROGRESS-BAR-END..................
    
    if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
        document.getElementById("prog-container").style.display = "block";
        
        document.getElementById("second-navbar").style.display = "flex";
    }
    
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("bar_container").style.fontSize = "18px";
        document.getElementById("bar_container").style.marginTop = "-18px";

        document.getElementById("navbar").style.position = "fixed";
        document.getElementById("navbar").style.zIndex = "4";
        document.getElementById("navbar").style.top = "0%";
        document.getElementById("navbar").style.height = "45px";
        document.getElementById("navbar").style.boxShadow = " 0px 0px 40px #2b2b2b";

        document.getElementById("login-container").style.height = "45px";

        document.getElementById("login-btn").style.width = "75px";
        document.getElementById("login-btn").style.height = "25px";
        document.getElementById("login-btn").style.fontSize = "8px";

        document.getElementById("logo").style.fontSize = "22px";
        document.getElementById("logo").style.lineHeight = "45px";

        document.getElementById("back-to-top-switch").style.display = "block";

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
        document.getElementById("bar_container").style.fontSize = "22px";
        document.getElementById("bar_container").style.marginTop = "0px";

        document.getElementById("back-to-top-switch").style.display = "none";

        document.getElementById("prog-container").style.display = "none";

        document.getElementById("second-navbar").style.display = "none";

        document.getElementById("navbar").style.height = "80px";
        document.getElementById("navbar").style.alignItems = "center";
        document.getElementById("navbar").style.boxShadow = "none";


        document.getElementById("login-btn").style.width = "100px";
        document.getElementById("login-btn").style.height = "38px";
        document.getElementById("login-btn").style.fontSize = "12px";

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
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("mybar").style.width = scrolled + "%";
        document.getElementById("prog-container").style.zIndex = "50";


    }
}
// ============================NAV-BAR-ONSCROLL-END=============================*/  

jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $("#close-sidebar").click(function () {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function () {
        $(".page-wrapper").addClass("toggled");
    });

});

// time stamp

let displayTime = document.getElementById("curr-time");

setInterval(() => {
    let liveTime = new Date();
    displayTime.innerHTML = liveTime.toLocaleString();
})