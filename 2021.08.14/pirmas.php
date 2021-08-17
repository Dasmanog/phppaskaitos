<!-- 1.	Sukurti puslapį su juodu fonu(background color) ir su dviem linkais (nuorodom) (href) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. 
Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo 
kintamojo, vėl pasidarytų juodas. -->
<?php


$color = "black";
if (isset($_GET['color']) ) {
   $color = "red";
}

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
            background-color: <?= $color ?>;
        }
    </style>
</head>
<body>
    <a href="./pirmas.php?color=1">A</a>
    <a href="./pirmas.php">B</a>
</body>
</html>