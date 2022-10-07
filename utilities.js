const getSubsButton = document.querySelector('#login-btn');
getSubsButton.addEventListener('click', updateSubsButton());

function updateSubsButton() {
    getSubsButton.textContent = "SUBSCRIBED";
}

/*
<script src="main.js"></script>
    <script src="utilities.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script type="text/javascript">
        $(document).on("click", "nav ul li", function () {
            $(this).addClass('active').siblings().removeClass('active');
        })
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
    </script>*/ 

