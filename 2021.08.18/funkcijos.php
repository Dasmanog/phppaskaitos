<?php
//////////////////////////////---------------------2021-08-18-------------------------/////////////////////////////// 

//NAGLIO 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if($_POST['action'] == 'create'){
        store();
        header("location:./crudSESSION.php");
        die;
    }

    if($_POST['action'] == 'update'){
        update();
        header("location:./crudSESSION.php");
        die;
    }
    
    if($_POST['action'] == 'destroy'){
        destroy();
        header("location:./crudSESSION.php");
        die; 
    }

}

$action = 'create';

if(isset($_GET['action'])){
        $car = edit();
        $action = 'update';
    }






//////////////////////////////////////vietoj sesiju turi atsidurti setData()////////////////////////////////////////////
function init()
{
    session_start();
    if (!isset($_SESSION['carList'])) {
        $_SESSION['carList'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit()
{
    foreach ($_SESSION['carList'] as $car) {
        if ($car['id'] == $_GET['id']) {
            return $car;
        }
    }
}

function store()
{
    $car['id'] = $_SESSION['id'];
    $car['Gamintojas'] = $_POST['Gamintojas'];
    $car['Modelis'] = $_POST['Modelis'];
    $car['Metai'] = $_POST['Metai'];
    $car['Spalva'] = $_POST['Spalva'];
    $car['Rida'] = $_POST['Rida'];
    $car['Degalai'] = $_POST['Degalai'];
    $_SESSION['id']++;
    $_SESSION['carList'][] = $car;
}

function destroy()
{
    foreach ($_SESSION['car'] as $key => $car) {
        if ($car['id'] == $_POST['id']) {
            unset($_SESSION['carList'][$key]);
            return;
        }
    }
}


function update()
{
    foreach ($_SESSION['carList'] as &$car) { //sioje vietoje ieskom, ir istrauktus elementus pasivadinam player.
        if ($car['id'] == $_POST['id']) { //ar konkretaus playerio id yra lygi tai kuria katik paspaudem redaguoti mygtuka is post formos.
            $car['Gamintojas'] = $_POST['Gamintojas'];
            $car['Modelis'] = $_POST['Modelis'];
            $car['Metai'] = $_POST['Metai'];
            $car['Spalva'] = $_POST['Spalva'];
            $car['Rida'] = $_POST['Rida'];
            $car['Degalai'] = $_POST['Degalai'];
            return;
        }
    }
}
