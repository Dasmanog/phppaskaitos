<!-- 7.	Pakartokite 6 uždavinį. 
Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu 
(t.y. į patį save) jau GET metodu. -->

<?php
// echo "<pre>";
// echo $_SERVER['REQUEST_METHOD'];// parodo kokiu budu yra kreipiamasi i serveri, get arpost. Mygtukai sukonektinti, t.y. spaudziant get, rodoma, kad su get jungiamasi ir atvirksciai. 
// echo "</pre>";

$color = "green";

 if ($_SERVER['REQUEST_METHOD']  =="POST")  {//JEIGU I SERVERI KREIPIAMASI SU POST METODU, KADANGI SERVER REQUEST METHOD SAVYJE SAUGO REIKSME, KAIP MES KREIPIAMES I SERVERI, TAI JIS PAGAL SI KINTAMAJO PAVADINIMA GALI PASAKYTI SU KUO MESKREIPEMES IR TADA ATSPAUSDINS. 
 // echo "KREIPIESI POSTU";
  $color = "yellow";
  header("location:./7.php");//matau tu atejai su postu, bet as vistiek tave redirectinsiu i geta. 
  die;
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
        .bg-color {
            background-color: <?= $color ?>
        }
    </style>
<body class="bg-color">
    <!-- <a href="?color=2">Href variantas, kai paspaudziama ir uzsipildo url, masyvas pasipildo color 2</a> -->
    <!-- <input type="text" name="color" > -->
    <form action="" method="GET">
        <button type="submit"> GET</button>
    </form>
    <form action="" method="POST">
        <button type="submit"> POST</button>
    </form>
</body>

</html>