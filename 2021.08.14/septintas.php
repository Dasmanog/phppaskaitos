<!-- 7.	Pakartokite 6 uždavinį. 
Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->


<?php
$color = "green";

echo $_SERVER['REQUEST_METHOD']; // Kad suzinoti kokiu metodu buvo kreiptasi, reikia viska atlikti su server, lauztiniuose request method, tai sukuria
//uzklausa, kad mes klausiam ko jis kiek turi. Kadangi jis yra ife, vadinasi reikia nurodyti metoda kuriuo buvo kreipiamasi, kaip pvz POST. 
//jis atpazista pagal tai, kas nurodyta form.
if ($_SERVER['REQUEST_METHOD'] == "POST") { //nurodo, kokiu budu kreipemes. 
    $color = "yellow";
    header('location:./septintas.php'); // sioj salygoj, geltona spalva taip ir nepasidaro. Headeris iskart vykdo nukreipima i get busena, t.y. kaip pacioj pradzioj cia atejom.
    //todel, nors ir salyga atititnka ir turetu buti vykdoma geltona spalva, taciau vykdant salyga iki galo, ivyksta nukreipimas i vel ten pat kur buvo. 
    die;//ir mirsta. tai reiskia, kad jeigu norim is naujo sukti if'o cikla, reikia puslapi reloadinti. 
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
        body {
            background-color: <?= $color ?>;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <button type="submit">GET</button>
    </form>

    <form action="" method="post">
        <button type="submit">POST</button>
    </form>

</body>

</html>