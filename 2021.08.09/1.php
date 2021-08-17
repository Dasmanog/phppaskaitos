
<!-- 1.	Sukurti puslapį su juodu fonu(background color) ir su dviem linkais (nuorodom) (href) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų perdavimo metodu perduodamu kintamuoju color=1.
 Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo
kintamojo, vėl pasidarytų juodas. -->


<?php
$color = "black";
if(isset($_GET['color'])){ //jeigu kintamasis color issetintas, tuomet mums atspausidns masyva. 
    // print_r($_GET);// sitas ifas mums leidziapadaryti kad back endine dalis apsprednzia frontenda.
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
</head>
<style>
.big-color
 {
    background-color:<?= $color ?> ;
}

/*lengviausias budas kintamuosius padavineti yra pasiversti php faila su */
</style>

<body class="big-color">
        <a href="./1.php">A</a> <!--.Viena nuoroda su failo vardu. Ar mes uzrasom ar ne adresa, jeigu tai musu adresas, tai jis tolygus tusciom kabutems.--> 
        <a href="./1.php?color=1">B</a><!--.Viena nuoroda su failo vardu GET duomenų perdavimo metodu perduodamu kintamuoju color=1.--> 

        <form action="" method="GET">
</body>

</html>