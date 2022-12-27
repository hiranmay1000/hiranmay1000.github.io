<?php

$isSub = false;
$isCollab = false;

if(isset($_POST['user_subs'])){

    $server = "localhost";
    $uname = "root";
    $pass = "";

    // establish connection with database
    $connection = mysqli_connect($server, $uname, $pass);

    if(!$connection){
        die("connection to this database failed due to " . mysqli_connect_error());
    }

    $email = $_POST['email'];

    $sql = "INSERT INTO `user_subscription`.`blog_subscribers` (`email`, `date`) VALUES ('$email', current_timestamp())";

    if($connection->query($sql) == true){
        $isSub = true;
    }else{
        echo "<br>Connection error!";
    }

    // disable connection
    $connection->close();

}else if(isset($_POST['user_contrib_req'])){
    $server = "localhost";
    $uname = "root";
    $pass = "";

    // establish connection with database
    $connection = mysqli_connect($server, $uname, $pass);
    
    if(!$connection){
        die("connection to this database failed due to " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $message = $_POST['user_req'];

    $sql2 = "INSERT INTO `user_subscription` . `user_collab` (`name`, `message`, `date`) VALUES ('$name', '$message', current_timestamp())";

    if($connection->query($sql2) == true){
        $isCollab = true;
    }else{
        echo "<br>Connection error!";
    }

    // disable connection
    $connection->close();

}
?>

<div class="section-container" id="newsletter_section">
    <section class="page4-newsl">
        <div class="message-page page-height">
            <h4>WANT TO CONTRIBUTE? LEAVE A MESSAGE</h4>
            <form action="#newsletter_section" method="post">
                <div class="message-container">
                    <input type="text" name="name" id="name-box" placeholder="Name *" required>
                    <input type="text" name="user_req"id="mess-box" placeholder="Your Message" required>
                    <div class="collab-btns">
                        <input type="submit" value="SEND" class="submit-btn submit-btn-mess" name="user_contrib_req">
                        <input type="reset" value="RESET" class="reset-btn" style="background:pink">
                    </div>
                    <?php if($isCollab == true){
                        echo "<div> <p id='dis_collab_mess' style='color: lightgreen; font-size:17px; text-align: center;'>Thanks for showing interest <br> See you soon!</p></div>";
                    }?>
                </div>
            </form>
        </div>
    </section>

    <section class="page5">
        <div class="subscribe subscribe-page page-height">
            <form action="#newsletter_section" method="post">
                <div class="subscribe-details-container">
                    <h4 class="page-heading subscribe-heading">SUBSCRIBE TO MY NEWSLETTER</h4>
                    <input type="email" name="email" id="email-box" placeholder="Email *" required>
                    <input type="submit" value="SUBSCRIBE" class="submit-btn" name="user_subs">
                    <?php if($isSub == true){
                        echo "<div> <p id='dis_sub_mess' style='color: lightgreen; font-size:17px; '>Thanks for subscribing</p></div>";
                    }?>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    const sub_feedback = document.getElementById("dis_sub_mess");
    const collab_feedback = document.getElementById("dis_collab_mess");

    function showSubsText(){
        sub_feedback.style.visibility = "hidden";
    }setTimeout("showSubsText()", 5000);

    function showCollabText(){
        collab_feedback.style.visibility = "hidden";
    }setTimeout("showCollabText()", 5000);

</script>