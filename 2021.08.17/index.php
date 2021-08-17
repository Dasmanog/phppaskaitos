<?php

//---------------------------------PABAIGTI---------------------


include('funkcijos.php');

init(); // sukuria sesija, patikrina ar musu sesijoj yra tie kintamieji, jeigu nera, tada sukuriama.


if ($_SERVER['REQUEST_METHOD'] == "POST") { //JEIGU I SERVERI BUVO KREIPTASI POSTO METODU, TADA ESANTYS VIDUJE IFAI BUS SVARSTOMI. 

    if ($_POST['action'] == 'create') {
        store(); //jeigu musu actionas lygus create, mes paleidziam sukurimo funkcija. 
        header('location:./index.php');
        die;
    }

    if ($_POST['action'] == 'delete') {
        destroy(); //jeigu action ==delete, tai mes pajungiam destroy funkcija. 
        header('location:./index.php');
        die;
    }


    if ($_POST['action'] == 'update') {
        update();
        header('location:./index.php');
        die;
    }
}

$action = 'create';

if (isset($_GET['action'])) { //jeigu actionas yra issetintas GET'e reiskia, kad as atejau redaguoti. 
    $player = edit();  //kai paspaudziam edit mygtuka ir norim kad cia uzsipildytu reiksmes.
    $action = 'update'; // kai einam redaguoti, tada pakeiciama action default reiksme i update. 
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
        <input type="hidden" name="action" value="<?=$action?>"><!-- kai sukursim nauja irasa, sitas kintamasis bus -->
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
        <!-- --------------------I ETAPAs----------------------------------------- -->
        <!-- isitraukiam  is olympic playerius ir juos atvaizduojam-->
        <?php $count = 0; // sukuriamas random kintamasis, kuris sako kiek cia ko yra. 
        foreach ($_SESSION['olympic'] as $player) { ?>
            <!--9.      susidarom foreach, kas susd kiekvienas elementas istraukta sis 'zoo' masyva, elementai vadinsis $animal, $animal yra sugalvotas zodis, nesusijes su pries tai esanciu kontekstu tiesiogiai, t.y. pavadinta staip nes logiskiausia butu.-->
            <tr>
                <!-- kiekviena istraukta per cikla i-taji elementa pavadinam $animal,  paimam jo rusi, varda ir amziu,id-->
                <td><?= ++$count . "/" . $player['id'] ?> </td>
                <!-- 15.pirmas  NETIKRAS ID  ++ reiskia, kad pries tai pliusuojama ir jau su supliusiuota reiksme veiksmai atliekami. Antras ID TIKRAS
             -->
                <td><?= $player['name'] ?> </td> <!-- table data cell -->
                <td><?= $player['surname'] ?> </td>
                <td><?= $player['sport'] ?> </td>
                <td><?= $player['country'] ?> </td>
                <td><?= $player['gender'] ?> </td>
                <td><?= $player['victories'] ?> </td>

                <td> <a class="btn btn-warning" href="?id=<?= $player['id'] ?>&action=update">Keisti</a> </td> <!--  12.   kadangi reikalingas GET, norint, kad edit mygtukas atliktu savo funkcija, t.y. suteiktu galimybe input laukelyje redaguoti kintamuosius, todel reikia padaryti a href -->
                <td>
                    <form action="" method="post">
                       <input type="hidden" name="id" value="<?= $player['id'] ?>">
                       <input type="hidden" name="action" value="destroy">
                       <button class="btn btn-danger" type="submit">Trinti</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

</body> 
</html>