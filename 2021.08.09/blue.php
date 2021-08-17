<!-- 5.	Sukurkite du atskirus puslapius blue.php ir red.php 
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!). 
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį 
(iš raudono į mėlyną ir atvirkščiai). -->
<?php
if (isset($_GET['go'])) { //kreipimasis atgal i ta pati puslapi, pamaciau, kad yra get issetintas kintamasis, todel as nukreipiu vartotoja i kita puslpai. 
    header("location:./red.php");  
    die; 
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


</head>

<body style="background-color: blue;">
    <a href="?go=1">to myself</a>
</body>

</htm l>