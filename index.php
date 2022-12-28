<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="./Images/Logoes/h.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"> -->

        <title>Hiranmay's web</title>
    </head>

    <body id="section1">

        <?php require('partials/_sidebar.php') ?>
        <?php require('partials/_utility.php') ?>

        <!---------------------------- FULL-WEBPAGE --------------------------->
        <div id="full-webpage">
            <main>
                <!-- --------------------- PAGE-1 ----------------------------->
                <div class="page1" id="section1">
                    <!-- HEADER -->
                    <?php require('partials/_header_nav.php') ?>
                    <!-- HEADER-END -->

                    <section class="index-banner" id="index-banner">
                        <div class="r_box">
                        <?php require('partials/_show_date_time.php') ?>
                        </div>
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
                                    <a href=""><i class="fa-duotone fa-books"></i>  </a>
                                                                  <!-- <input
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
                                    </div> -->
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
                                        href="./self-driving-car-simulation/index.php"
                                    >
                                        <h3 class="element-title">
                                            SELF DRIVING SIMULATION
                                        </h3>
                                    </a>
                                </div>
                                <div class="element-sq">
                                    <a
                                        href="./personality-api/personality-api.php"
                                    >
                                        <h3 class="element-title">
                                            PERSONALITY API
                                        </h3>
                                    </a>
                                </div>
                                <div class="element-rec">
                                    <a href="./BlackJack_game/blackjack.php">
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
                                        href="./sub-pages/projects.php"
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
                                    href="./Projects-page/projects.php"
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
                                        href="./sub-pages/aboutme.php"
                                        style="text-decoration: underline"
                                        >about me</a
                                    ></span
                                >
                                section
                            </p>
                            <br />
                            <p>
                                For more queries
                                <a href="/sub-pages/contact.php">
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
                


                <!------------------------ NEWSLETTER ------------------------->
                <?php require('partials/_subscription.php')?>
                <!------------------------ NEWSLETTER-END ------------------------->



            </main>
            <?php require('partials/_footer_blue.php') ?>
        </div>
        <!--__________________________ FULL-WEBPAGE-THE_END____________________________-->



        <!-- ..............JAVASCRIPT............... -->
        <?php require('partials/_javascript_library_essentials.php') ?>
        <?php require('partials/_hello_world_typed.php') ?>

        <script src="main.js"></script>
        <!-- .............JAVASCRIP-END............... -->
    </body>
</html>