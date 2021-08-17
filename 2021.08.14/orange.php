<!-- 4.	Sukurkite du puslapius lemon.php ir orange.php. Jų fonus nuspalvinkite atitinkamom spalvom. 
Į lemon.php puslapį įdėkite kodą, kuris naršyklę visada peradresuotų į puslapį orange.php. Pademonstruokite veikimą. -->
<?php


header("location:./lemon.php"); //sis kodas padaro peradresavima is karto, be jokiu if'u. tiesiog isijungia puslpais ir iskart meta i kita. 
die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    background-color: orangered;
}

    </style>
</head>
<body>
    
</body>
</html>