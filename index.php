<?php

    require __DIR__ . '/function.php';

    if (isset($_GET['passLength'])) {
        $lengthPass = $_GET['passLength'];
    }

    $characters = 'ABCDEFGHIJKLMNOPQRSUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.-_$&£?ìè#òç*+^';
    $charactersArray = str_split($characters);



    if (isset($lengthPass) && ($lengthPass >= 8)) {

        $password = generatePassword($charactersArray, $lengthPass);
        session_start();
        $_SESSION['password'] = $password;
        header('Location: ./redirect.php');
    }



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
        <form action="index.php" method="GET">
            <div class="">
                <label for="passLength" class="form-label">Lunghezza Password:</label>
                <input type="number" class="form-control" id="passLength" name="passLength">
            </div>
            <button type="submit" class="button">Genera Password</button>
        </form>
        <br>
        <?php 
        if (isset($_GET['passLength'])  ) {
            echo "<h1> Numero Caratteri Insufficienti (Minimo 8)</h1>";
        }
    ?>
    </div>



</body>

</html>