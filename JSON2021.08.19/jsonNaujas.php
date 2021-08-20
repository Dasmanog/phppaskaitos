<?php


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
    foreach (getData() as $car) {
        if ($car['id'] == $_GET['id']) {
            return $car;
        }
    }
}
//-------IRASYMAS-----------------------------//
//IRASYME REIKIA TURETI MASYVA I KURI IRASINESIM. IR LIEPTI I TA MASYVA IRASYTI. 
function store()
{
    $data = getData(); // iskvieciam musu funkcija cia ir gaunam duomeis is txt failo ,updatinam
    //-------SUSIKONSTRUOJAM OBJEKTA-------------------------------------//
    $car['id'] = newId();
    $car['manufacturer'] = $_POST['manufacturer'];
    $car['model'] = $_POST['model'];
    $car['year'] = $_POST['year']; // raktazodziai pagal kuriuos as galiu istraukti reiksmes. 
    $car['color'] = $_POST['color'];
    $car['distance'] = $_POST['distance'];
    $car['fuel'] = $_POST['fuel'];


    $data[] = $car; // vietoj session, ISIDEDAM i data MASYVA SAVO ZAIDEJA , papildom masyva.
    setData($data); // TADA GRAZINAM IR ATGAL IRASYSOM I JSON(FAILUS).
}



//-------------------------------NAUJOS 3 FUNKCIJOS, NORINT DIRBTI SU JSON SIAME PROJEKTE---------------------------------------//

//------------------------------- 1 ---------------------------------------//
function getData() //GAVOM DUOMENIS IS DATA.TXT
{
    $arr = json_decode(file_get_contents('./data.txt'), 1); // irase vieneta, verciam i masyva.  kadangi mums reikia php, o ne json, tad reikia decode.
    //ir tai ka pavers, mes returninsim. 
    // foreach ($arr as &$entry) { // kastinimas. Nurodyti, jog i objekta ziuretu kaip i masyva. vienas irasas lygus sau paciam ir yra kastintas i masyva.  
        // $entry = (array) $entry;
       return $arr;
    }
// }
//------------------------------- 2 ------------------ ---------------------//
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
    $data = getData();
    foreach ($data as $key => $car) {
        if ($car['id'] == $_POST['id']) {
            unset($data[$key]);
            setData($data);
            return;
        }
    }
}

//id manufacturer model year color distance fuel
function update()
{
    $data = getData();
    foreach ($data as &$car) { //sioje vietoje ieskom, ir istrauktus elementus pasivadinam player.
        if ($car['id'] == $_POST['id']) { //ar konkretaus playerio id yra lygi tai kuria katik paspaudem redaguoti mygtuka is post formos.
            $car['manufacturer'] = $_POST['manufacturer'];
            $car['model'] = $_POST['model'];
            $car['year'] = $_POST['year']; // raktazodziai pagal kuriuos as galiu istraukti reiksmes. 
            $car['color'] = $_POST['color'];
            $car['distance'] = $_POST['distance'];
            $car['fuel'] = $_POST['fuel'];
            setData($data);
            return;
        }
    }
}
?>