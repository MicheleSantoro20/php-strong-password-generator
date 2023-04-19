<?php
    if (isset($_GET['passLength']) && strlen($_GET['passlength']) < 8) {
        $lengthPass = $_GET['passLength'];
    } else {
        echo '<h1>Numero di caratteri insufficienti</h1>';
    }

    $characters = 'ABCDEFGHIJKLMNOPQRSUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.-_$&£?ìè#òç*+^';
    $charactersArray = str_split($characters);

    function generatePassword ($charactersArray, $lengthPass) {
        $password=[];
        $i=0;
        while($i < $lengthPass) {
            $randomChar=rand(0,count($charactersArray));
            foreach ($charactersArray as $character => $value){
                
            }
        }
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
</body>

</html>