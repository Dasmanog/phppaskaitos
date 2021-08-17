<!-- Padaryti puslapį, kuriame būtų h1 elementas su juodu tekstu "Kas atėjo?", POST forma su text tipo input'u, bei submit mygtukas.

Įrašius belenkokį vardą ir paspaudus mygtuką - formos turi nebelikti, 

o vietoje juodo h1 teksto, turi atsirasti raudonas h1 tekstas "Labas, <vardas įrašytas formoje>!"

    pats kertinis principas tas pat, scenarijų kiekis toks pat

pavyzdys is 7web mechanikos 9 uzdavinio. 

 -->

<?php
session_start();
$color = 'black';
$showForm = true;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color:  <?= $olor ?>
        }
    </style>
</head>

<body>
    <h1>Kas atėjo?</h1>
    <form action="./MarijausUzd.php" method="post">
        <input type="text">
        <button type="submit">press</button>
    </form>
</body>

</html>