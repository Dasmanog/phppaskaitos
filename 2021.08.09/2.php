<!-- 2.	Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) 
puslapio fono spalva pasidarytų tokios spalvos. -->

<?php
$color = "white";
if(isset($_GET['color'])){ //jeigu kintamasis color issetintas, tuomet mums atspausidns masyva. Jeig nurodytas raktazodis, reiksia yra ir reiksme. 
$color = $_GET['color']; //color lygu spalva, kuri atkeliavo is musu GET'O. GET'AS yra asociatyvus masyvas. 
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
.bg-color
 {
    background-color:#<?= $color ?>  /*# zenkliukas reikalingas tam, kad butu galima uzrasyti url spalvos koda, o jis paprastai rasomas su # 
    zenkliuku, todel paliekam ji pries php sklaisutu atidaryma.  */
}
</style>

<body class="bg-color">
        <a href="./2.php">Nuoroda</a> <!--.Viena nuoroda su failo vardu. Ar mes uzrasom ar ne adresa, jeigu tai musu adresas, tai jis tolygus tusciom kabutems.--> 
</body>

</html>