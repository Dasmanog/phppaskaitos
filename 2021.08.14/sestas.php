<!-- 6.	Padarykite puslapį su dviem mygtukais. 
Mygtukus įdėkite į dvi skirtingas formas- vieną GET ir kitą POST. 
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->

<?php
$color = "green";

echo $_SERVER['REQUEST_METHOD']; // Kad suzinoti kokiu metodu buvo kreiptasi, reikia viska atlikti su server, lauztiniuose request method, tai sukuria
//uzklausa, kad mes klausiam ko jis kiek turi. Kadangi jis yra ife, vadinasi reikia nurodyti metoda kuriuo buvo kreipiamasi, kaip pvz POST. 
//jis atpazista pagal tai, kas nurodyta form.
if ($_SERVER['REQUEST_METHOD'] == "POST") { //nurodo, kokiu budu kreipemes. 
    $color = "yellow";
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