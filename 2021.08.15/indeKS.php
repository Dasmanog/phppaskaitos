<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") { // tai yra patvirtinimas, kad dirbame su post'u.
    $animal = []; //4. sukuriam tuscia masyva, i kuri butu galima saugoti duomenis, kuriuos irasome per input laukeli (amzius, vardas, rusis). 
    $animal['discipline'] = $_POST['discipline']; //5a. TURIME IESKOTI PER $_POST, nes jame saugoma informacija.
    // 5b. Nurodom raktinius zodzius, (input name)pagal ka jis gali surasti ir kam prilygsta. 
    $animal['age'] = $_POST['age'];
    $animal['name'] = $_POST['name'];
    $animal['gender'] = $_POST['gender'];

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
    <title>Document</title>
</head>
<body>
<form class="form" action="" method="POST">   <!--2. Jeigu action stulpelis tuscias, mes kreipsimes atgal i ta pati puslapi kai jis ijungiamas, todel tiesiog duomenys ten ir nugula.-->
        <div class="form-group row">
            <!--gyvuno rusis  -->
            <label class="col-sm-2 col-form-label">Sporto šaka</label>
            <div class="col-sm-4">
                <input type="text" name="discipline" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <!--gyvuno vardas  -->
            <label class="col-sm-2 col-form-label">Vardas</label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <!--gyvuno amzius  -->
            <label class="col-sm-2 col-form-label">Amžius</label>
            <div class="col-sm-4">
                <input type="text" name="age" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <!--gyvuno amzius  -->
            <label class="col-sm-2 col-form-label">Lytis</label>
            <div class="col-sm-4">
                <input type="text" name="gender" class="form-control">
            </div>
        </div>
        <button class="btn btn-info" type="submit">submit</button>
    </form>
</body>
</html>