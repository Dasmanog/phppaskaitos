<!-- 9.	Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… 

Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, 
rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). -->
<?php
// session_start();
$color = "black";
$letter = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
if($_SERVER['REQUEST_METHOD'] == "POST"  && ISSET($_POST['checkbox'])){
    echo count($_POST['checkbox']) . "/" . $_POST['times']; // isspausdina 'checkbox(vadinasi kiek uzzymejom) ir 'times'(kiek buvo is viso random sukurta)
    $color = "white";
    header($_SERVER['REQUEST_METHOD']);
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
        body{
            background-color: <?= $color ?>;
        }
        label{
            color: grey;
        }
    </style>
</head>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == "GET") { ?>
     <form action="" method="post">
<!--iterptas php, ji reikia ir sakinio pradzioj(kodo) ir gale rasyti, nes atidarom ir uzdarom.
paleis atsitiktini kieki skaiciu, sukant fora, nes mums reikia, kad butu kintantis kiekviena karta checkboxu skaicius. 
Tiek kartu kiek suksis foras, tiek sugeneruos checkboxu. o paskui sulipinsim su raidem. lygtais su foreachu. -->

 <!-- SUGENERUOJA RANDOM SKAICIU CHECKBOX'U. 
        $letter sugeneruoja raide, kai nurodom $i reiksme. -->
    <?php for ($i=0; $i < rand(3,10) ; $i++) { ?>  
        <label for="a<?= $i ?>" ><?=$letter[$i]?></label>
        <input type="checkbox" id="a<?= $i ?>" name="checkbox[]" value="">  
        <br>
        <?php } ?>
  <input type="hidden" name= "times" value= <?=$i?> >
   <br><button type="submit">Spausk</button>
    </form> 
<?php } ?> 
</body>
</html>