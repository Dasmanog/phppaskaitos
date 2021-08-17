<!-- 5.	Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!).
 Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, 
 o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->
<?php

if (isset($_GET['gipsyy'])) {
    header("location:./red.php"); //sis kodas padaro peradresavima is karto, be jokiu if'u. tiesiog isijungia puslpais ir iskart meta i kita. 
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
    <style>
        body {
            background-color: blue;
        }
    </style>
</head>

<body>

</body>
<form action="" method="get"></form>
<a href="?gipsyy=1">1</a>

</html>