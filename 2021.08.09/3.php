<!-- 3.	Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->
<?php
$color = "mistyrose";
if (isset($_GET['color'])) { //jeigu kintamasis color issetintas, tuomet mums atspausidns masyva. Jeig nurodytas raktazodis, reiksia yra ir reiksme. 
    $color = $_GET['color']; //color lygu spalva, kuri atkeliavo is musu GET'O. GET'AS yra asociatyvus masyvas. 
}

//su href ar su  form padavineti dalykus. Jeigu vartotojas nieko neivedineja, tada naudojamas href, jeigu ivedineja, tada naudojama form.
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
            background-color: #<?= $color ?>;
            background-color: <?= $color ?>
        }
    </style>
</head>

<body class="bg-color">
    <!-- <a href="./3.php">Nuoroda</a> -->
    <!--.sitoj formoj sukurta nulis kintamuju-->
    <!--.Viena nuoroda su failo vardu. Ar mes uzrasom ar ne adresa, jeigu tai musu adresas, tai jis tolygus tusciom kabutems.-->
    <form action="" method="GET">
         <input type="text" name = "color"> <!--prisikiriam irasomam tekstui color kintamaji, kas reiskia, kadmes uzrase teksta, priskiriam ji sio kintamojo reiksmems(irasytam i input laukeli teksta-->
        <button type="submit">spalvink</button>
</body>

</htm l>