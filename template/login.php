<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @font-face {
            font-family: 'password';
            font-style: normal;
            font-weight: 400;
            src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
        }

        input.key {
            font-family: 'password';
        }
    </style>
</head>
<body>
    <div class="wrapper fadeInDown">
        <h1 style="color: #283c7b; font-size: 28px; margin-bottom: 24px; font-weight: 500;">LOGIN FORM</h1>
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png" style="width: 100px !important;" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="xulylogin.php" method="POST" name="form_login" target="if2">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="username" style="text-align: start;">
                <input type="text" id="password" class="fadeIn third key" name="password" placeholder="password" style="text-align: start;">
                <input type="submit" class="fadeIn fourth" value="Login">
            </form>
        </div>
    </div>
</body>
</html>