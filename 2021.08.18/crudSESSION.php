<?php
include('./funkcijos.php');

init();


?>


<!DOCTYPE html>
<html lang="en">

<?php //////////////////////////////---------------------2021-08-18-------------------------/////////////////////////////// 
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>

<body>
    <!-- id manufacturer model year color distance fuel -->
    <form action="" method="POST" class="form">
        <input type="hidden" name="action" value="<?= $action ?>">
        <div class="form-group row">
            <!-- manufacturer -->
            <label class="col-sm-2 col-form-label">Gamintojas</label>
            <div class="col-sm-4">
                <input type="text" name="manufacturer" class="form-control" value="<?= (isset($car)) ? $car['manufacturer'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!-- model -->
            <label class="col-sm-2 col-form-label">Modelis</label>
            <div class="col-sm-4">
                <input type="text" name="model" class="form-control" value="<?= (isset($car)) ? $car['model'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!-- year -->
            <label class="col-sm-2 col-form-label">Metai</label>
            <div class="col-sm-4">
                <input type="text" name="year" class="form-control" value="<?= (isset($car)) ? $car['year'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!-- color -->
            <label class="col-sm-2 col-form-label">Spalva</label>
            <div class="col-sm-4">
                <input type="text" name="color" class="form-control" value="<?= (isset($car)) ? $car['color'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!-- distance -->
            <label class="col-sm-2 col-form-label">Rida</label>
            <div class="col-sm-4">
                <input type="text" name="distance" class="form-control" value="<?= (isset($car)) ? $car['distance'] : "" ?>">
            </div>
        </div>
        <div class="form-group row">
            <!-- fuel -->
            <label class="col-sm-2 col-form-label">Degalai</label>
            <div class="col-sm-4">
                <input type="text" name="fuel" class="form-control" value="<?= (isset($car)) ? $car['fuel'] : "" ?>">
            </div>
        </div>
        <?php if (!isset($car)) {
            echo '<button class="btn btn-primary" type="submit">Pridėti automobilį</button>';
        } else {
            echo '
            <input type="hidden" name="id" value="' . $car['id'] . ' ">
            <button class="btn btn-info" type="submit">Atnaujinti automobilį</button>';
        } ?>
    </form>

    <?php
    if (isset($_GET['show'])) { ?>
        <a href="?show">Rodytis</a>

        <table class="table table-light table-striped">
            <tr>
                <!-- Duomenys atvaizduojami paciam table -->
                <th>ID</th>
                <th>Gamintojas</th>
                <th>Modelis</th>
                <th>Metai</th>
                <th>Spalva</th>
                <th>Rida</th>
                <th>Rida</th>
                <th>Degalai</th>
                <th>Edit</th>

                <th>Delete</th>

            </tr>
            <?php // sukuriamas random kintamasis, kuris sako kiek cia ko yra.
            ?>
            <?php $count = 0; // sukuriamas random kintamasis, kuris sako kiek cia ko yra.
            foreach (getData() as $car) { ?>
                <tr>
                    <td><?= ++$count . "/" . $car['id'] ?> </td>
                    <!-- cia reiks iterpti ir id, paziureti siandienini video.  -->
                    <td><?= $car['Gamintojas'] ?></td>
                    <td><?= $car['Modelis'] ?></td>
                    <td><?= $car['Metai'] ?></td>
                    <td><?= $car['Spalva'] ?></td>
                    <td><?= $car['Rida'] ?></td>
                    <td><?= $car['Degalai'] ?></td>

                    <!--  12.   kadangi reikalingas GET, norint, kad edit mygtukas atliktu savo funkcija, t.y. suteiktu galimybe input laukelyje redaguoti kintamuosius, todel reikia padaryti a href -->
                    <td> <a class="btn btn-warning" href="?id=<?= $car['id'] ?>&action=update">Keisti</a>
                 </td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $car['id'] ?>">
                            <input type="hidden" name="action" value="destroy">
                            <button class="btn btn-danger" type="submit">Trinti</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else {  ?>
        <a href="?hide">Slėpti</a>
    <?php } ?>

</body>

</html>