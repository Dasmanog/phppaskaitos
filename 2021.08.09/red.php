<!-- 5.	Sukurkite du atskirus puslapius blue.php ir red.php 
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) 
naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->

<?php
//kam gali reiketi tokio dalyko?? kad vartotojas egzamindamas musus koda, nematys sprendimu, nes nebus parasyta, kad tai yra perkelta i kita puslapi. 
if (isset($_GET['go'])) {// kadangi go kintamasis issetintas, todel mus nukreipia i nurodyta puslapi. 
    header("location:./blue.php"); //gerai veikia, peradresavimui skirtas kodas. 
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

<body style="background-color: red;">
    <a href="?go=1">to myself</a>
</body>

</html>