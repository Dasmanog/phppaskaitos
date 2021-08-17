<!-- 2.	Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, 
URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->

<?php

$color = "white";
if (isset($_GET['color']) ) { //getas yra asociatyvus masyvas. 
   $color = $_GET['color']; //reiskia, kad jeigu ifas pasitvirtina, tai splava bus tokia kokia atkeliauja is get'o, o tiksliau, tai kokia irasom i url.
}// grazi salotine spalva color=3ff987. 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#<?= $color ?>;
            background-color:<?= $color ?>
        }
    </style>
</head>
<body>
    <a href="./antras.php">A</a>
    <a href="./antras.php">B</a>
</body>
</html>