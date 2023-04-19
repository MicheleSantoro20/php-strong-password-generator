<?php
    if (isset($_GET['passLength'])) {
        $lengthPass = $_GET['passLength'];
    }

    $characters = 'ABCDEFGHIJKLMNOPQRSUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.-_$&£?ìè#òç*+^';
    $charactersArray = str_split($characters);

    function generatePassword ($charactersArray, $lengthPass) {
        $passwordGen=[];
        $i=0;
        while($i < $lengthPass) {
            $randomChar=rand(0,count($charactersArray));
            foreach ($charactersArray as $character => $value){
                if ($randomChar == $character) {
                    $passwordGen[]=$character;
                }
            }
        }
        implode(" ", $passwordGen);
        return $passwordGen;
    }

    if (isset($lengthPass)) {
        $password = generatePassword($charactersArray, $lengthPass);
    }



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div class="mb-3">
            <label for="passLength" class="form-label">Lunghezza Password:</label>
            <input type="number" class="form-control" id="passLength" name="passLength">
        </div>
        <button type="submit" class="btn btn-primary">Genera Password</button>
    </form>

    <?php 
        if (isset($password)) {
            echo $password;
        }
    ?>
</body>

</html>