<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test area</title>
    <style>
        body{
            background-image: url('../Images/demonSlayer.jpg');
            margin: 0;
            padding: 0;
        }

        #box {
            height: 100vh;
            text-align: center;
            display: none;
        }
        
        .login-cont{
            width: 200px;
            height: 300px;
            margin:  0 auto;
            background-color: grey;
        }

        #box input{
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <button id="login-btn">REGISTER</button>
    <div id="box" >
        <div class="login-cont">
            <input type="username">
            <input type="password" name="pass" id="passid">
            <button type="submit">SUBMIT</button>
        </div>
    </div>
</body>

<script>
    const loginBtn = document.getElementById('login-btn');
    const loginBox = document.getElementById('box');
    const fullWebPage = document.querySelector('body');

    loginBtn.addEventListener('click', () =>{
        if(loginBox.style.display === 'block'){
            loginBox.style.display = 'none';
            fullWebPage.style.backdropFilter= "none"

        }else{
            loginBox.style.display = 'block';
            fullWebPage.style.backdropFilter= "blur(12px)"
        }
    })
</script>
</html>