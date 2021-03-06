<!-- 1. susikurti index.php, functions.php
2. index.php sukurti duomenų suvedimo forma su POST metodu. Forma kreipsis atgal į tą patį puslapį.
    2.1 formos turinys: name, surname, sport, country, gender, victories; 
    3. includiname functions.php į index.php failą jo viršuje.


index.php susikuriame IF sąlygą kuri tikrina ar mes kuriame naują įrašą;
jo viduje iškviečiame store() funkciją kurią aprašysite functions.php faile. funkcijai baigus darbą, 
redirectinate į index.php;
store:
pasakote, kad į olypmics masyvą(kuris yra sesijoje) įdėsite dar vieną elementą, kuris bus:
a) masyvas;
b) sukonstruotas 'key'=> 'value' principu.
c) jums reikės įdėti id kurį gausite iš sesijos, nepamirškite jo padidinti.

 -->
<?php
// include('functions.php');
session_start();
if (!isset($_SESSION['olympic'])) {
    $_SESSION['olympic'] = []; //jeigu nera nei vieno nei kito, praktiskai tai neimanom ir turi vykti sukurimas. 
    $_SESSION['id'] = 1; // cia galutinai yra sukuriamas ID, ir jo naudojimas tada kai startuoja elementai, nes jeigu nera zoo, tai nera ir ID. 
}

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])) { // KURIANT ID. Sukurus, kad atskirtu ar mes paprastai su getu uzeinam i psulpai, ar mes spaudizam ant edit mygtuko, nes edit mygtukas turi id. 
    foreach ($_SESSION['olympic'] as $entry) {
        if ($entry['id'] == $_GET['id']) {
            $player = $entry;
            break;
        }
    }
}

// 3. issiaiskinti kokiu budu kreiptasi i serveri.  
if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])) { // rasom kai norim irodyti, kad turim kintamaji ir paspaudus ant mygtuko mes tiesiog ji redaguojam ir nereikia kurti naujo. Tuo paciu jeigu ivedam parametrus ir spaudziam mygtuka, taciau id dar neturim, tada reiskia kad reikia sukurti nauja playeri.
    // $player = []; //4.       NEBUTINA EILUTE.  sukuriam tuscia masyva, i kuri butu galima saugoti duomenis, kuriuos irasome per input laukeli (amzius, vardas, rusis). 
    //5.  Tisklas yra, suradus reiksmes pagal raktazodzius, sdeti kiekviena gyvuna kaip masyva i si $animal masyva. tai bus masyvai(gyvunai) sudeti i viena masyva($animal).
    $player['id'] = $_SESSION['id']; //12.   kintamojo sukurimas id, kuri idedam i sesija. jis yra idetas i zoo. id kurimas, kad galetume identifikuoti elementus, ir zinoti, kuri reikia redaguoti, deletinti. 
    $player['name'] = $_POST['name']; //5a. TURIME IESKOTI PER $_POST, nes jame saugoma informacija.
    $player['surname'] = $_POST['surname']; // 5b.           Nurodom raktinius zodzius, (input name)pagal ka jis gali surasti ir kam prilygsta. // 5c.    nurodom, kad pvz ['species'] yra lygus tai eilutei, kurioje mes nurodome rusies input name.
    $player['sport'] = $_POST['sport']; // key + value principas.  
    $player['country'] = $_POST['country'];
    $player['gender'] = $_POST['gender'];
    $player['victories'] = $_POST['victories'];

    $_SESSION['id']++; // 13. ir dar pries sukontruojant gyvuna(eilute zemiau), as kaskart pliusuoju ir vis paduodu kita id skaiciu. taip islaikomas autentiskumas.

    $_SESSION['olympic'][] = $player; // 6.             Sesijoje nurodom, kad viskas kas saugoma su animal kintamuoju, priklauso olympic sriciai.

    header("location:./index.php"); // 10.  redirect, tam, kad kaskart perkrovus nesikartotu uzklausa paskutine. 
    die;
}


if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['surname'])) { // DELETE.....if'as kad delete'as butu atliekamas. 
    foreach ($_SESSION['olympic'] as $key => $player) { //sioje vietoje ieskom, ir istrauktus elementus pasivadinam player.
        if ($player['id'] == $_POST['id']) { //ar konkretaus playerio id yra lygi tai kuria katik paspaudem redaguoti mygtuka is post formos.
            unset($_SESSION['olympic'][$key]);

            header("location:./index.php");
            die;
        }
    }
    header("location:./index.php");
    die;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) { //EDIT.......JEIGU TURI ID TAI REISKIA, KAD PASPAUDUS MYGTUKA, MES JI UPDATINAM, cia ivyksta update'as.
    foreach ($_SESSION['olympic'] as &$player) { //sioje vietoje ieskom, ir istrauktus elementus pasivadinam player.
        if ($player['id'] == $_POST['id']) { //ar konkretaus playerio id yra lygi tai kuria katik paspaudem redaguoti mygtuka is post formos.
            $player['name'] = $_POST['name'];
            $player['surname'] = $_POST['surname'];
            $player['sport'] = $_POST['sport']; // raktazodziai pagal kuriuos as galiu istraukti reiksmes. 
            $player['country'] = $_POST['country'];
            $player['gender'] = $_POST['gender'];
            $player['victories'] = $_POST['victories'];


            header("location:./index.php");
            die;
        }
    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Olympics</title>
    <style>
        body {
            background-color: grey;
            color: white;
        }
    </style>
</head>

<body>
    <form action="./index.php" method="post">
        <div class="form-group row">
            <!--name  -->
            <label class="col-sm-2 col-form-label">Vardas</label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control" value="<?= (isset($player)) ? $player['name'] : "" ?>"> <!--  klausiu ar turiu kintamaji olympic, jeigu taip, tada redaguojam  -->
            </div>
        </div>
        <div class="form-group row">
            <!--surname  -->
            <label class="col-sm-2 col-form-label">Pavardė</label>
            <div class="col-sm-4">
                <input type="text" name="surname" class="form-control" value="<?= (isset($player)) ? $player['surname'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!-- sport  -->
            <label class="col-sm-2 col-form-label">Sporto šaka</label>
            <div class="col-sm-4">
                <input type="text" name="sport" class="form-control" value="<?= (isset($player)) ? $player['sport'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!--country  -->
            <label class="col-sm-2 col-form-label">Šalis</label>
            <div class="col-sm-4">
                <input type="text" name="country" class="form-control" value="<?= (isset($player)) ? $player['country'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!--gender  -->
            <label class="col-sm-2 col-form-label">Lytis</label>
            <div class="col-sm-4">
                <input type="text" name="gender" class="form-control" value="<?= (isset($player)) ? $player['gender'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!--victories  -->
            <label class="col-sm-2 col-form-label">Pergalės</label>
            <div class="col-sm-4">
                <input type="text" name="victories" class="form-control" value="<?= (isset($player)) ? $player['victories'] : "" ?>">
            </div>

        </div>
        <?php if (!isset($player)) { //jeigu nera zmogaus- reiskia reikia prideti, todel sudirbs pirmas mygtukas; 
            echo '<button class="btn btn-info" type="submit">Pridėti sportininką</button>';
        } else {
            echo ' <input type="hidden" name="id" value="' . $player['id'] . ' "> <button class="btn btn-info" type="submit">Atnaujinti sportininką</button>';  //jeigu zmogus toks yra, tai reiskia atnaujinti bus mygtukas.
        } ?>

    </form>
    <table class="table table-dark table-striped">
        <!-- 8.      kuriam table, kad viskas galetu atsivaizduoti lenteleje, tai ka mes suvedam input laukelyje. -->
        <tr>
            <!--8a.         table eilute(table row) -->
            <th>ID</th><!-- 14.    itraukiamas ID i bendra lentele, kad vizualiai matytusi. -->
            <th>Vardas</th> <!-- 8b.     table headeriai(th)(cia rasom tai ka reiktu suvesti i laukelius). virsutine eilute lenteles.  -->
            <th>Pavardė</th> <!-- 8b.     table headeriai(th)(cia rasom tai ka reiktu suvesti i laukelius). virsutine eilute lenteles.  -->
            <th>Sporto šaka</th>
            <th>Šalis</th>
            <th>Lytis</th>
            <th>Pergalės</th>
            <th>Edit</th>
            <!--11.         Ivedam EDIT funkcija. Cia ji tik paduodama kaip pavadinimas, (lenteleje kiekvienas elementas turi tureti sita parinkti -->
            <th>Delete</th>
            <!--11.         Ivedam DELETE funkcija. Cia ji tik paduodama kaip pavadinimas, (lenteleje kiekvienas elementas turi tureti sita parinkti -->
        </tr>
        <?php foreach ($_SESSION['olympic'] as $player) { ?>
            <!--9.      susidarom foreach, kas susd kiekvienas elementas istraukta sis 'zoo' masyva, elementai vadinsis $animal, $animal yra sugalvotas zodis, nesusijes su pries tai esanciu kontekstu tiesiogiai, t.y. pavadinta staip nes logiskiausia butu.-->
            <tr>
                <!-- kiekviena istraukta per cikla i-taji elementa pavadinam $animal,  paimam jo rusi, varda ir amziu,id-->
                <td><?= $player['id'] ?> </td> <!-- 15.    itraukiamas ID i bendra lentele, kad vizualiai matytusi. -->
                <td><?= $player['name'] ?> </td><!-- table data cell -->
                <td><?= $player['surname'] ?> </td>
                <td><?= $player['sport'] ?> </td>
                <td><?= $player['country'] ?> </td>
                <td><?= $player['gender'] ?> </td>
                <td><?= $player['victories'] ?> </td>
                <!-- 16. irasoma ?id= i href'a, tam kad jis butu iterptas. -->
                <td> <a class="btn btn-warning" href="?id=<?= $player['id'] ?>">Keisti</a> </td> <!--  12.   kadangi reikalingas GET, norint, kad edit mygtukas atliktu savo funkcija, t.y. suteiktu galimybe input laukelyje redaguoti kintamuosius, todel reikia padaryti a href -->
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $player['id'] ?>">
                        <button class="btn btn-danger" type="submit">Trinti</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        <!-- atidarom ir uzdarom php, kad uzdarytume foreach cikla.    -->
    </table>

</body>

</html>


<!-- 3 POST'O FORMOS
1. POSTO forma id neturi, mes idedam gyvuna
2. POSTO forma yra kai mes pasirenkam kazka redaguoti, paspaudziam atnaujinti(issaugoti)
3. POSTO forma  delete(jos savyje turi inputus)  -->