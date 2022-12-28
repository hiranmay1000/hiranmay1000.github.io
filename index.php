<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hiranmay's web</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="./Images/Logoes/h.png" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"> -->

        <link
            href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"
            rel="stylesheet"
        />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body id="section1">

        <div class="page-wrapper chiller-theme">
            <input type="checkbox" id="check" />
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="#">YOUR ACCOUNT</a>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="sidebar-header">
                        <div class="user-info">
                            <span class="user-name"
                                >User
                                <strong>Info</strong>
                            </span>
                            <span class="user-role">Administrator</span>
                            <span class="user-status">
                                <i class="fa fa-circle"></i>
                                <span>Online</span>
                            </span>
                        </div>
                    </div>
                    <!-- sidebar-header  -->
                    <!-- sidebar-search  -->
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">
                                <span>General</span>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fa fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
                                    <!-- <span class="badge badge-pill badge-warning">New</span> -->
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a href="/index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="sub-pages/aboutme.html"
                                                >About Me</a
                                            >
                                        </li>
                                        <li>
                                            <a href="sub-pages/aboutme.html"
                                                >Resume</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Projects</span>
                                    <span class="badge badge-pill badge-danger"
                                        >Beta</span
                                    >
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a
                                                href="./Chrome_extention/chrome_extention.html"
                                                >Chrome extention
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="./self-driving-car-simulation/index.html"
                                                >Self drive model</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                href="./BlackJack_game/blackjack.html"
                                                >Blackjack game</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="far fa-gem"></i>
                                    <span>Components</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a href="#">General</a>
                                        </li>
                                        <li>
                                            <a href="#">Panels</a>
                                        </li>
                                        <li>
                                            <a href="#">Tables</a>
                                        </li>
                                        <li>
                                            <a href="#">Icons</a>
                                        </li>
                                        <li>
                                            <a href="#">Forms</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fa fa-chart-line"></i>
                                    <span>Charts</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a href="#">Pie chart</a>
                                        </li>
                                        <li>
                                            <a href="#">Line chart</a>
                                        </li>
                                        <li>
                                            <a href="#">Bar chart</a>
                                        </li>
                                        <li>
                                            <a href="#">Histogram</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fa fa-globe"></i>
                                    <span>Maps</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a href="#">Google maps</a>
                                        </li>
                                        <li>
                                            <a href="#">Open street map</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-menu">
                                <span>Extra</span>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-book"></i>
                                    <span>Documentation</span>
                                    <span class="badge badge-pill badge-primary"
                                        >Beta</span
                                    >
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-calendar"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-folder"></i>
                                    <span>Examples</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- sidebar-menu  -->
                </div>
                <!-- sidebar-content  -->
                <div class="sidebar-footer">
                    <a href="#">
                        <i class="fa fa-bell"></i>
                        <span
                            class="badge badge-pill badge-warning notification"
                            >3</span
                        >
                    </a>
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        <span
                            class="badge badge-pill badge-success notification"
                            >7</span
                        >
                    </a>
                    <a href="#">
                        <i class="fa fa-cog"></i>
                        <span class="badge-sonar"></span>
                    </a>
                    <a href="#">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </nav>
            <!-- sidebar-wrapper  -->
        </div>

        <div id="preloader"></div>
        <div class="progression-cont" id="prog-container">
            <div class="progression-bar" id="mybar"></div>
        </div>

        <div class="second-nav-cont" id="second-navbar">
            <div class="second-nav">
                <ul class="second-nav-menu">
                    <li><a href="#index-banner">ONE</a></li>
                    <li><a href="#section2">TWO</a></li>
                    <li><a href="#section3">THREE</a></li>
                    <li><a href="#section4">FOUR</a></li>
                    <li><a href="#section5">FIVE</a></li>
                    <li><a href="#">TOP</a></li>
                    <li><a href="#bottom-part">BOTTOM</a></li>
                </ul>
            </div>
        </div>
        <!-- -----------------BACK-TOP-TOP----------------- -->
        <div id="top-of-page"></div>
        <a href="#top-of-page" id="back-to-top-switch">
            <div class="back-to-top-btn">
                <div class="b-t-t-btn-container"></div>
            </div>
        </a>
        <!-- -----------------BACK-TOP-TOP-END----------------- -->
        <!---------------------------- FULL-WEBPAGE --------------------------->
        <div id="full-webpage">
            <main>
                <!-- --------------------- PAGE-1 ----------------------------->
                <div class="page1" id="section1">
                    <!-- HEADER -->
                    <header id="navbar">
                        <div class="logo-container">
                            <div id="logo">
                                <a href="index.html"
                                    >HIRAN<span style="color: #e63946"
                                        >MAY</span
                                    ></a
                                >
                            </div>
                        </div>

                        <nav class="navbar navbar-second" id="main-menu">
                            <div class="sidebar_menu">
                                <div class="bars_corner">
                                    <a
                                        id="show-sidebar"
                                        class="btn btn-sm btn-dark"
                                        href="#"
                                    >
                                        <i
                                            id="bar_container"
                                            class="fas fa-bars"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                            <ul id="nav-menu">
                                <li id="nav-list-items" class="active">
                                    <a
                                        class="nav-link btn active"
                                        id="link1"
                                        href="#section1"
                                        >HOME</a
                                    >
                                </li>
                                <li id="nav-list-items" class="menu-links">
                                    <a
                                        class="nav-link btn"
                                        id="link4"
                                        href="#section2"
                                        >PROJECTS</a
                                    >
                                </li>
                                <li id="nav-list-items" class="menu-links">
                                    <a
                                        class="nav-link btn"
                                        id="link5"
                                        href="#section4"
                                        >ABOUT ME</a
                                    >
                                </li>
                                <li id="nav-list-items" class="menu-links">
                                    <a
                                        class="nav-link btn"
                                        id="link3"
                                        href="https://hiranmay1000.github.io/seekerbays/"
                                        >BLOG</a
                                    >
                                </li>
                                <li id="nav-list-items" class="menu-links">
                                    <a
                                        class="nav-link btn"
                                        id="link2"
                                        href="https://www.canva.com/design/DAFH2qEmzZQ/GmlQdfQODweu4PW86PImbw/view?utm_content=DAFH2qEmzZQ&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink"
                                        >RESUME</a
                                    >
                                </li>
                            </ul>
                        </nav>

                        <div id="login-container">
                            <button id="login-btn" type="button">
                                SUBSCRIBE
                            </button>
                        </div>
                    </header>
                    <!-- HEADER-END -->

                    <section class="index-banner" id="index-banner">
                        <div class="vertical-center">
                            <div class="title-3">
                                <div class="welcome">
                                    <h4>
                                        <span
                                            id="hello"
                                            style="color: #e85848"
                                        ></span>
                                    </h4>
                                </div>
                            </div>

                            <div class="border-title">
                                <div class="title-inside-box">
                                    <div class="title">
                                        <h2>I'm a<br />software Engineer</h2>
                                    </div>
                                </div>
                                <div class="search-box">
                                    <input
                                        type="search"
                                        name="Search"
                                        class="search-input"
                                        placeholder="Search here"
                                    />
                                    <div class="container-btn">
                                        <button
                                            id="search-btn"
                                            type="submit"
                                            name="Search"
                                        >
                                            SEARCH
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="title-2">
                                <p> 
                                    Below <br />
                                    are the some projects which I have made
                                    througout my<br />
                                    carrer
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                <!------------------------- PAGE-1-END------------------------->

                <!-- ------------------------PAGE-2-------------------------- -->
                <div class="page2">
                    <section class="all-elements" id="section2">
                        <div class="all-elements-box">
                            <div class="element-container">
                                <div class="element-sq">
                                    <a href="">
                                        <h3 class="element-title">
                                            CHROME EXT
                                        </h3>
                                    </a>
                                </div>
                                <div class="element-rec">
                                    <a
                                        href="./self-driving-car-simulation/index.html"
                                    >
                                        <h3 class="element-title">
                                            SELF DRIVING SIMULATION
                                        </h3>
                                    </a>
                                </div>
                                <div class="element-sq">
                                    <a
                                        href="./personality-api/personality-api.html"
                                    >
                                        <h3 class="element-title">
                                            PERSONALITY API
                                        </h3>
                                    </a>
                                </div>
                                <div class="element-rec">
                                    <a href="./BlackJack_game/blackjack.html">
                                        <h3 class="element-title">
                                            BLACKJACK GAME
                                        </h3>
                                    </a>
                                </div>
                                <div class="element-sq">
                                    <a href="achivement-page  page-template">
                                        <h3 class="element-title">
                                            ACHEIVEMENTS
                                        </h3>
                                    </a>
                                </div>
                                <div class="element-sq">
                                    <a
                                        id="see-all"
                                        href="./sub-pages/projects.html"
                                    >
                                        <h3 class="element-title">
                                            <em>SEE ALL</em>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!------------------------ PAGE-2-END ------------------------->

                <!-------------------------- PAGE-3 --------------------------->
                <div class="page3">
                    <section class="index-banner-2" id="section3">
                        <div class="vertical-center">
                            <div class="my-info-blury-container">
                                <div class="title-software">
                                    <h2>
                                        I'M A <br />SOFTWARE
                                        <span
                                            class="input"
                                            style="color: orange"
                                        ></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!------------------------- PAGE-3-END ------------------------>

                <!--------------------------- PAGE-4 -------------------------->
                <div class="page4">
                    <section class="previews" id="section4">
                        <div class="vertical-center">
                            <h3>Creations</h3>
                            <p>
                                To see my latest projects and updates please
                                visit
                                <a
                                    id="projects-html-page"
                                    href="./Projects-page/projects.html"
                                    >project
                                </a>
                                section and also check out my latest
                                <a href="blogs">blogs</a>.
                            </p>
                            <br />
                            <p>
                                To know more please visit
                                <span style="background-color: lightblue"
                                    ><a
                                        href="./sub-pages/aboutme.html"
                                        style="text-decoration: underline"
                                        >about me</a
                                    ></span
                                >
                                section
                            </p>
                            <br />
                            <p>
                                For more queries
                                <a href="/sub-pages/contact.html">
                                    contact me</a
                                >
                                .
                            </p>

                            <br />
                            <p id="github-code-link">
                                <a
                                    href="https://github.com/hiranmay1000/personal-web"
                                    target="_blank"
                                    >Code for this website
                                    <img
                                        class="hyperlink-logo"
                                        src="./Images/Logoes/hyperlink.png"
                                        alt="hyperlink logo"
                                /></a>
                            </p>
                        </div>
                    </section>
                </div>
                <!------------------------ PAGE-4-END ------------------------->
            </main>

            <!------------------------------- footer-page --------------------------->
            <div class="footer-page" id="section5">
                <div class="footer-start-banner">
                    <marquee class="paragraph-message para-color"
                        ><strong>Disclaimer:</strong> This website is under
                        development (Beta version). Continuous upgradation is
                        going on, if you find any any bugs related problems
                        please inform through the given contact sources. Stay
                        tuned.</marquee
                    >
                </div>
                <footer id="footer-index-main">
                    <ul>
                        <li><a href="#section1">Home</a></li>
                        <li>
                            <a href="./Projects-page/projects.html">Projects</a>
                        </li>
                        <li><a href="/sub-pages/contact.html">Contacts</a></li>
                        <li><a href="/sub-pages/aboutme.html">About Me</a></li>
                        <li>
                            <a
                                href="https://www.canva.com/design/DAFH2qEmzZQ/GmlQdfQODweu4PW86PImbw/view?utm_content=DAFH2qEmzZQ&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink"
                                >Resume</a
                            >
                        </li>
                        <p id="copyright">© HIRANMAY all rights reserved</p>
                    </ul>

                    <div class="social-media">
                        <ul>
                            <li>
                                <a
                                    href="https://www.linkedin.com/in/hiranmay-mandal-006aa8217"
                                    ><img
                                        class="footer-icons"
                                        src="./Images/Logoes/linkedinlogo3.png"
                                        alt="LinkedIn img"
                                /></a>
                            </li>
                            <li>
                                <a
                                    href="https://www.instagram.com/hiranmay1000/"
                                    ><img
                                        class="footer-icons"
                                        src="./Images/Logoes/instagramlogo3.png"
                                        alt="Instagram img"
                                /></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/hiranmay1000"
                                    ><img
                                        class="footer-icons"
                                        src="./Images/Logoes/twitterlogo3.png"
                                        alt="Tweeter img"
                                /></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/hiranmay20"
                                    ><img
                                        class="footer-icons"
                                        src="./Images/Logoes/facebooklogo3.png"
                                        alt="Facebook img"
                                /></a>
                            </li>
                        </ul>
                    </div>
                </footer>
                <div class="contacts-banner" id="bottom-part">
                    <ul>
                        <li class="contacts-details contacts-details-email">
                            Email-
                            <a href="mailto:hiranmay1000@gmail.com"
                                >hiranmay1000@gmail.com</a
                            >
                        </li>
                        <li class="contacts-details contacts-details-ph">
                            Ph- <a href="callto:9064999233">+91-9064999233</a>
                        </li>
                    </ul>

                    <ul>
                        <li class="version">Version 5.2.4</li>
                    </ul>
                </div>
                <div class="footer-end-banner">
                    <p></p>
                </div>
            </div>
            <!------------------------- FOOTER-PAGE-END ---------------------------->
        </div>
        <!------------------------ FULL-WEBPAGE-END ----------------------------->

        <!-- =================================================================================================================================================== -->

        <!-- ..................................JAVASCRIPT.................................. -->
        <!-- page-wrapper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
        <!---------------------------->

        <script src="main.js"></script>
        <script src="utilities.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

        <script type="text/javascript">
            $(document).on("click", "nav ul li", function () {
                $(this).addClass("active").siblings().removeClass("active");
            });
        </script>

        <script>
            var typed2 = new Typed("#hello", {
                strings: ["HELLO WORLD!"],
                typeSpeed: 200,
                loop: true,
                backSpeed: 110,
            });
            var typed2 = new Typed(".input", {
                strings: ["ENGINEER", "DEVELOPER", "DESIGNER"],
                typeSpeed: 150,
                backSpeed: 110,
                loop: true,
            });
        </script>
        <!-- ..................................JAVASCRIP-END.................................. -->
    </body>
</html>
