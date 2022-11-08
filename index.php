<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <iframe name="if1" src="template/header.php" width="100%" height="120" scrolling="no" frameboder="0"></iframe>
    <iframeset name="main">
        <iframe name="if2" src="template/sidebar_left.php" width="10%" height="550" scrolling="no" frameboder="0"></iframe>
        <iframe name="if3" src="template/content.php" width="80%" height="550" scrolling="yes" frameboder="0"></iframe>
        <iframe name="if4" src="template/sidebar_right.php" width="8%" height="550" scrolling="no" frameboder="0"></iframe>
    </iframeset>
    <iframe name="if5" src="template/footer.php" width="100%" height="250" scrolling="no" frameboder="0"></iframe>
</body>
</html>