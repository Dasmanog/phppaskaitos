
<!-- 3.	Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->
<!-- Reziumuojant, tai galimi trys budai, kaip pakeisti spalva. Tai yra sukurti pati kintamaji, per href prirasyti prie l0cation per klaustuka kintamaji
tada sekantis budas yra sukurti if isset salyga, kuri tikrina ar kintamasis apskritai yra siame masyve, ir tik tada jis isveda spalva, kuri paduodama i url,
ir paskutinis budas yra sukurti form, input(kur ivedamas spalvos kodas), ir button, kad kaskart kai paspaudziam mygtuka, irasytas tekstas butu priskirtas
 kintamajam kuris jau is anksto yra aprasytas kode.  -->



<?php

$color = "white";
if (isset($_GET['color']) ) { //getas yra asociatyvus masyvas. 
   $color = $_GET['color']; //reiskia, kad jeigu ifas pasitvirtina, tai splava bus tokia kokia atkeliauja is get'o, o tiksliau, tai kokia irasom i url.
}// grazi salotine spalva color=3ff987; color=%2320b2aa (zydra)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#<?= $color ?>;
            background-color:<?= $color ?>
        }
    </style>
</head>
<body>
    
    <a href="./trecias.php">A</a>
    <a href="./trecis.php">B</a>

    <form action="" method="get">
<!--tas domuo kuri mes sukuriam, jie turi buti su kintamuoju, taigi nepamirsti sukurti name ir priskirti kintamajam varda, kad jis galetu buti issaugotas.  -->
         <input type="text" name="color">     
       <button type="submit">Spausk</button>
    </form>
</body>
</html>