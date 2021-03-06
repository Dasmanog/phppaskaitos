<?php


include('./jsonData.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") { //JEIGU I SERVERI BUVO KREIPTASI POSTO METODU, TADA ESANTYS VIDUJE IFAI BUS SVARSTOMI. 

    if ($_POST['action'] == 'create') {
        store(); //jeigu musu actionas lygus create, mes paleidziam sukurimo funkcija. 
        header('location:./index.php');
        die;
    }

    if ($_POST['action'] == 'update') {
        update(); //jeigu action ==delete, tai mes pajungiam destroy funkcija. 
        header('location:./index.php');
        die;
    }

    if ($_POST['action'] == 'destroy') {
        destroy();
        header('location:./index.php');
        die;
    }
}

$action = 'create';

if (isset($_GET['action'])) {
    $car = edit();
    $action = 'update';
}

// init(); // sukuria sesija, patikrina ar musu sesijoj yra tie kintamieji, jeigu nera, tada sukuriama.

// //fill form for edit
// if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])) { //jeigu yra GET'as ir yra issetintas ID, mes bandom surasti viena konkretu gyvuna,
//     $player = edit();  //kai paspaudziam edit mygtuka ir norim kad cia uzsipildytu reiksmes.
// }

// // store
// if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])) { // rasom kai norim irodyti, kad turim kintamaji ir paspaudus ant mygtuko mes tiesiog ji redaguojam ir nereikia kurti naujo. Tuo paciu jeigu ivedam parametrus ir spaudziam mygtuka, taciau id dar neturim, tada reiskia kad reikia sukurti nauja playeri.
//     store(); // turi pasiimti ir kazka issaugoti i sesija, ji neturi nieko grazinti.
//     header("location:./index.php");
//     die;
// }

// //destroy
// if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['surname'])) { // DELETE.....if'as kad delete'as butu atliekamas. 
//     destroy();
//     header("location:./index.php");
//     die;
// }

// //update
// //jeigu yra POST  ir yra ID, kai mes submitinam forma, updatinam. 
// if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) { //EDIT.......JEIGU TURI ID TAI REISKIA, KAD PASPAUDUS MYGTUKA, MES JI UPDATINAM, cia ivyksta update'as.
//     update();
//     header("location:./index.php");
//     die;
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Cars</title>
    <style>
        body {
            background-color: grey;
            color: white;
        }
    </style>
</head>

<body>
    <form class="form" action="./index.php" method="POST">
        <input type="hidden" name="action" value="<?= $action ?>">
        <div class="form-group row">
            <!--manufacturer  -->
            <label class="col-sm-2 col-form-label">Manufacturer</label>
            <div class="col-sm-4">
                <input type="text" name="manufacturer" class="form-control" value="<?= (isset($car)) ? $car['manufacturer'] : "" ?>"> <!--  klausiu ar turiu kintamaji olympic, jeigu taip, tada redaguojam  -->
            </div>
        </div>
        <div class="form-group row">
            <!--model  -->
            <label class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-4">
                <input type="text" name="model" class="form-control" value="<?= (isset($car)) ? $car['model'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!-- year  -->
            <label class="col-sm-2 col-form-label">Year</label>
            <div class="col-sm-4">
                <input type="text" name="year" class="form-control" value="<?= (isset($car)) ? $car['year'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!--color -->
            <label class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-4">
                <input type="text" name="color" class="form-control" value="<?= (isset($car)) ? $car['color'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!--distance  -->
            <label class="col-sm-2 col-form-label">Distance</label>
            <div class="col-sm-4">
                <input type="text" name="distance" class="form-control" value="<?= (isset($car)) ? $car['distance'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!--fuel  -->
            <label class="col-sm-2 col-form-label">Fuel</label>
            <div class="col-sm-4">
                <input type="text" name="fuel" class="form-control" value="<?= (isset($car)) ? $car['fuel'] : "" ?>">
            </div>

        </div>
        <?php if (!isset($car)) { //jeigu nera zmogaus- reiskia reikia prideti, todel sudirbs pirmas mygtukas; 
            echo ' <input type="hidden" name="action" value="create">'; //jei nera masinos - action create, nes kuriame. si actiona pasugauna IF grandine virsuje, kuri nusprendzia kuri metoda kviesti
            echo '<button class="btn btn-info" type="submit">Prid??ti automobil??</button>';
        } else {
            echo ' <input type="hidden" name="action" value="update">'; //jei yra masina - action update, nes atnaujiname. si actiona pasugauna IF grandine virsuje, kuri nusprendzia kuri metoda kviesti
            echo ' <input type="hidden" name="id" value="' . $car['id'] . ' "> 
            <button class="btn btn-info" type="submit">Atnaujinti automobil??</button>';  //jeigu zmogus toks yra, tai reiskia atnaujinti bus mygtukas.
        } ?>

    </form>

    <?php
    if (!isset($_GET['hide'])) { ?>
        <a href="?hide">Sl??pti</a>

    <table class="table table-dark table-striped">

        <tr>
            <th>ID</th>
            <th>Gamintojas</th>
            <th>Modelis</th>
            <th>Metai</th>
            <th>Spalva</th>
            <th>Kilometra??as</th>
            <th>Degalai</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php $count = 0;
        foreach (getData() as $car) { ?>
            <tr>
                <td><?= ++$count."/".$car['id'] ?> </td>
                <td><?= $car['manufacturer'] ?> </td>
                <td><?= $car['model'] ?> </td>
                <td><?= $car['year'] ?> </td>
                <td><?= $car['color'] ?> </td>
                <td><?= $car['distance'] ?> </td>
                <td><?= $car['fuel'] ?> </td>
                <td>
                    <a class="btn btn-warning" href="?id=<?= $car['id'] ?>&action=update">Keisti</a>
                </td> <!--  12.   kadangi reikalingas GET, norint, kad edit mygtukas atliktu savo funkcija, t.y. suteiktu galimybe input laukelyje redaguoti kintamuosius, todel reikia padaryti a href -->
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $car['id'] ?>">
                        <input type="hidden" name="action" value="destroy">
                        <button class="btn btn-danger" type="submit">Trinti</button>    <!--//cia truksta action -->
                    
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php } else {  ?>
        <a href="?show">Rodyti</a>
    <?php } ?>
</body>

</html>