<!-- 4.	Sukurkite du puslapius lemon.php ir orange.php. 
Jų fonus nuspalvinkite atitinkamom spalvom. 
Į lemon.php puslapį įdėkite kodą, kuris naršyklę visada peradresuotų į puslapį orange.php. 
Pademonstruokite veikimą. -->
<?php
// $color = "darkorange";
    header("location:./lemon.php"); //su siuo uzrasymu, spustelejus mygtuka, jis gali nukreipti i kita  puslapi.
    die; // session, mato prisijungusius vartotojus ir ka jie spaudzia, ziuri ar jie yra prisijunge prie tos sistemos, bet jeigu jie bando per url patekti kazkur, bet jis negali ten patekti, tai butu ijungtas peradresavimas.  
//jeigu veikia tai turi ismesti error'a ERR_TOO_MANY_REDIRECTS.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-color {
            background-color:orangered;
        }
    </style>
</head>

<body class="bg-color">
</body>

</html>