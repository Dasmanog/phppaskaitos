<!-- 8.	Sukurkite du puslapius pink.php ir rose.php. 
Nuspalvinkite juos atitinkamo spalvom. Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. 
Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. 
Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį.  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {//JEIGU SERVERYJE BUVO KREIPTASI GET METODU, TADA PERJUNK I PINK PUSLAPI.
    header("location:./pink.php");//SITAS REIKALINGAS TIK TAM, KAD I SI PUSLAPI BUTU GALIMA PTEKTI TIK SU NUORODA. 
    die;//TAI REISKIA, KAD GALIU PATEKTI TIK PER POST METODA. 
}//TAIGI SITAS IFAS REIKALINGAS, KAD VEDANT TIESIAI I URL DOMAINA(PSL PAVADINIMA) NEPATEKTUME I PUSLAPI IR BUTU NUKREIPIMAS I KITA PUSLAPI, NET IR ZINANT TIKLSU PSL VARDA. 


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            background-color: lightcoral;
        }
    </style>
</body>

</html>