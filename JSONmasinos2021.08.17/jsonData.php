<?php
//JSON REIKIA DVIEJU PAPILDOMU FUNKCIJU. 
//REIKIA ADAPTUOTI SITAM VARIANTUI, KAD JIS DIRBTU NEBE SUS SESIJA, O SU JSON. 

Init();

function init()
{
    if (!file_exists("./data.txt")) {
        file_put_contents("./data.txt", []);
        file_put_contents("./id.txt", 0); // kad sukurtu id paduodam nuline reiksme.
    }
}

function edit()
{
    foreach ($_SESSION['olympic'] as $player) {
        if ($player['id'] == $_GET['id']) {
            return $player;
        }
    }
}
//-------IRASYMAS-----------------------------//
//IRASYME REIKIA TURETI MASYVA I KURI IRASINESIM. IR LIEPTI I TAMASYVA IRASYTI. 
function store()
{
    $data = getData(); // iskvieciam musu funkcija cia ir gaunam duomeis is txt failo ,updatinam
    //-------SUSIKONSTRUOJAM OBJEKTA-------------------------------------//
    $player['id'] = newId();
    $player['name'] = $_POST['name'];
    $player['surname'] = $_POST['surname'];
    $player['sport'] = $_POST['sport'];
    $player['country'] = $_POST['country'];
    $player['gender'] = $_POST['gender'];
    $player['victories'] = $_POST['victories'];


    $data[] = $player; // vietoj session, ISIDEDAM i data MASYVA SAVO ZAIDEJA , papildom masyva.
    setData($data); // TADA GRAZINAM IR ATGAL IRASYSOM I JSON(FAILUS).
}



//-------------------------------NAUJOS 3 FUNKCIJOS, NORINT DIRBTI SU JSON SIAME PROJEKTE---------------------------------------//

//------------------------------- 1 ---------------------------------------//
function getData() //GAVOM DUOMENIS IS DATA.TXT
{
    json_decode(file_get_contents('./data.txt', 1)); // irase vieneta, verciam i masyva.  kadangi mums reikia php, o ne json, tad reikia decode.
    // ir tai ka pavers, mes returninsim. 
}
//------------------------------- 2 ---------------------------------------//
function setData($arr) //ATGAL GRAZINA JAU PAKEISTUS DUOMENIS /IRASYTUS DUOMENIS.
{
    file_put_contents('./data.txt', json_encode($arr)); // irase vieneta, verciam i masyva.  kadangi mums reikia php, o ne json, tad reikia decode.
    // ir tai ka pavers, mes returninsim. 
}
//------------------------------- 3 ---------------------------------------//
function newId() // SI FUNCKIJA PAIMA ID, PADIDINA, PADIDINTA IRASO IR TOKIA REIKSME GRAZINA. 
{
    $id = file_get_contents("./id.txt");
    $id++;
    file_put_contents("./id.txt", $id);
    return $id;
}


function destroy()
{
    foreach ($_SESSION['olympic'] as $key => $player) {
        if ($player['id'] == $_POST['id']) {
            unset($_SESSION['olympic'][$key]);
            return;
        }
    }
}


function update()
{
    foreach ($_SESSION['olympic'] as &$player) { //sioje vietoje ieskom, ir istrauktus elementus pasivadinam player.
        if ($player['id'] == $_POST['id']) { //ar konkretaus playerio id yra lygi tai kuria katik paspaudem redaguoti mygtuka is post formos.
            $player['name'] = $_POST['name'];
            $player['surname'] = $_POST['surname'];
            $player['sport'] = $_POST['sport']; // raktazodziai pagal kuriuos as galiu istraukti reiksmes. 
            $player['country'] = $_POST['country'];
            $player['gender'] = $_POST['gender'];
            $player['victories'] = $_POST['victories'];
            return;
        }
    }
}
