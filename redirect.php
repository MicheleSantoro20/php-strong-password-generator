<?php

    session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>

    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <div class="title">STRONG PASSWORD</div>
    <div class="container">

        <h1 class="black">
            La tua password Generata è:
            <?php 
                session_start();
                echo  $_SESSION['password'];
            ?>
        </h1>
    </div>



</body>

</html>