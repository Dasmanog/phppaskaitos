<!-- Zoologijos sodas. -->


<!-- // print_r($_POST);
// print_r($_GET);
// echo "<pre>"; 
// print_r($_SESSION['zoo']);// 7. NEBUTINA. TIK PASITIKRINIMUI. spausdinam gyvuna, kad paziureti kur viskas seivinasi. Tokiu principu, mes galim bet kiek atspasudinti gyvunu (masyvu, kuriu parametrai saugosi kaip gyvuno , viskas vienoj vietoj)
// echo "</pre>";  -->
<?php
session_start();
if (!isset($_SESSION['zoo'] ) ){// 13.  id kurimas, kad galetume identifikuoti elementus, ir zinoti, kuri reikia redaguoti, deletinti, ir kad viskas su ID  butu paeiliui, ir nesinulintu kaskart perkrovus, reikiapaklausti, ar apskritai yra toks elementas zoo. 
    $_SESSION['zoo'] = [];
    $_SESSION['id'] = 1; // cia galutinai yra sukuriamas ID, ir jo naudojimas tada kai startuoja elementai, nes jeigu nera zoo, tai nera ir ID. 
}
 

// nesuprantu su ID, edit, absoliuciai. Kosmosas..
// 
// 
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])) { //17.    tikrinam del get, nes getu mes kreipiames kai norim redaguoti kintamuosius. Jeigu geto masyve yra kintamasis, tada zinosim kad paspaudziau mygtuka. tiksliau kalbant, tai yra budas kaip issaiskinti ar mes kreipiames su getu ir turime id, kas reiskia turime jau kintamuosius, kuriuos pagal id atskria. 
foreach ($$_SESSION['zoo'] as $entry) {
  if ($entry['id'] == $_GET['id']) {
      $animal = $entry;
      break;
  }
}
// echo "kreipiuosi su GET'u";
}
// 
// 

// 3. issiaiskinti kokiu budu kreiptasi i serveri. 
if ($_SERVER['REQUEST_METHOD'] == "POST") { // tai yra patvirtinimas, kad dirbame su post'u.
    // $animal = []; //4.       NEBUTINA EILUTE.  sukuriam tuscia masyva, i kuri butu galima saugoti duomenis, kuriuos irasome per input laukeli (amzius, vardas, rusis). 
    //               5.  Tisklas yra, suradus reiksmes pagal raktazodzius, sdeti kiekviena gyvuna kaip masyva i si $animal masyva. tai bus masyvai(gyvunai) sudeti i viena masyva($animal).
    $animal['id'] = $_SESSION['id']; //12.   kintamojo sukurimas id, kuri idedam i sesija. jis yra idetas i zoo. id kurimas, kad galetume identifikuoti elementus, ir zinoti, kuri reikia redaguoti, deletinti. 
    $animal['species'] = $_POST['species']; //5a. TURIME IESKOTI PER $_POST, nes jame saugoma informacija.
    $animal['name'] = $_POST['name']; // 5b.           Nurodom raktinius zodzius, (input name)pagal ka jis gali surasti ir kam prilygsta. // 5c.    nurodom, kad pvz ['species'] yra lygus tai eilutei, kurioje mes nurodome rusies input name.
    $animal['age'] = $_POST['age']; // key + value principas.  
   
    
    $_SESSION['id']++;// 13. ir dar pries sukontruojant gyvuna(eilute zemiau), as kaskart pliusuoju ir vis paduodu kita id skaiciu. taip islaikomas autentiskumas.
    $_SESSION['zoo'][] = $animal; // 6.             Sesijoje nurodom, kad viskas kas saugoma su animal kintamuoju, priklauso zoo sriciai.


    header("location:./crud.php");// 10.        kas kart perkrovus puslapi, paskutine operacija yra pakartojama. Kad to nebutu, reikia padaryti lokacija nuline, kad vel butu metodas get, tada nesikartoja. 
die;// pakeiciamas metodas(is POST I GET), ir todel auksciau if nesuveikia, tol kol vel nera ivedami duomenys,ir paspaudziamas button, metodas buna GET(PASPAUDUS MYGTUKA METODAS TAMPA POST IR TIK TADA VYKDOMAS IF ESANTIS AUKSCIAU). 
//mirsta ir daugiau nesikartoja paskutine operacija, nes nutraukiamas paskutinis veiksmas, bet kasbuvo iki to, viskas lieka. 

}





// $_SESSION['users'][] = $_GET['duomuo']; // users vadinasi pirmas masyvas, o jame saugomos reiksmes, kurios yra numeruojamos automatiskai, pagal tai kiek yra reiksmiu
// //jos visos reiskmes, ka irasom issisaugoja, nes tai yra session, kuri seivina savyje daug duomenu, realiai tiek kiek irasysim. 
// print_r($_SESSION);


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


    <!-- 1.      apsirasom gyvunu skaidymo parametrus (rusis, amzius, id?, vardas) -->
    <form class="form" action="" method="POST">
        <!--2.       Jeigu action stulpelis tuscias, mes kreipsimes atgal i ta pati puslapi kai jis ijungiamas, todel tiesiog duomenys ten ir nugula.-->
        <div class="form-group row">
            <!--gyvuno rusis  -->
            <label class="col-sm-2 col-form-label">Gyvūno rūšis</label>
            <div class="col-sm-4">
                <input type="text" name="species" class="form-control" value=" <?= (isset($animal))? $animal['species'] :"" ?>"> <!--..20? zodziu, bandom suzinoti, ar animal toks jau yra, jeigu ne, atiduodam tuscia stringa, jeigu yra, redaguojam -->
            </div>
        </div>
        <div class="form-group row">
            <!--gyvuno vardas  -->
            <label class="col-sm-2 col-form-label">Gyvūno vardas</label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <!--gyvuno amzius  -->
            <label class="col-sm-2 col-form-label">Gyvūno amžius</label>
            <div class="col-sm-4">
                <input type="text" name="age" class="form-control">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Įvesti</button>
    </form>
    <table class="table table-dark table-striped">
        <!-- 8.      kuriam table, kad viskas galetu atsivaizduoti lenteleje, tai ka mes suvedam input laukelyje. -->
        <tr>
            <!--8a.         table eilute(table row) -->
             <th>ID</th><!-- 14.    itraukiamas ID i bendra lentele, kad vizualiai matytusi. -->
            <th>Rūšis</th> <!-- 8b.     table headeriai(th)(cia rasom tai ka reiktu suvesti i laukelius). virsutine eilute lenteles.  -->
            <th>Vardas</th> <!-- 8b.     table headeriai(th)(cia rasom tai ka reiktu suvesti i laukelius). virsutine eilute lenteles.  -->
            <th>Amžius</th> <!-- 8b.     table headeriai(th)(cia rasom tai ka reiktu suvesti i laukelius). virsutine eilute lenteles.  -->
            <th>Edit</th><!--11.         Ivedam EDIT funkcija. Cia ji tik paduodama kaip pavadinimas, (lenteleje kiekvienas elementas turi tureti sita parinkti -->
            <th>Delete</th><!--11.         Ivedam DELETE funkcija. Cia ji tik paduodama kaip pavadinimas, (lenteleje kiekvienas elementas turi tureti sita parinkti -->
        </tr>

        <?php foreach ($_SESSION['zoo'] as $animal) { ?>
            <!--9.      susidarom foreach, kas susd kiekvienas elementas istraukta sis 'zoo' masyva, elementai vadinsis $animal, $animal yra sugalvotas zodis, nesusijes su pries tai esanciu kontekstu tiesiogiai, t.y. pavadinta staip nes logiskiausia butu.-->
            <tr>
                <!-- kiekviena istraukta per cikla i-taji elementa pavadinam $animal,  paimam jo rusi, varda ir amziu,id-->
                <td><?= $animal['id'] ?> </td> <!-- 15.    itraukiamas ID i bendra lentele, kad vizualiai matytusi. -->
                <td><?= $animal['species'] ?> </td><!-- table data cell -->
                <td><?= $animal['name'] ?> </td>
                <td><?= $animal['age'] ?> </td>
                <!-- 16. irasoma ?id= i href'a, tam kad jis butu iterptas. -->
                 <td> <a href="?id=" class="btn btn-warning">Edit</a> </td> <!--  12.   kadangi reikalingas GET, norint, kad edit mygtukas atliktu savo funkcija, t.y. suteiktu galimybe input laukelyje redaguoti kintamuosius, todel reikia padaryti a href -->
            </tr>
        <?php } ?>
        <!-- atidarom ir uzdarom php, kad uzdarytume foreach cikla.    -->
    </table>
</body>

</html>


<!-- jeigu redaguojam gyvuna - edit mygtukas yra  GET tipo, nes jis mums ji atvaizduoja inpute, bet issaugojimas, kaip ir ivedimas  yra - POST -->
<!-- jeigu delete gyvuna - metodas POST -->

<!-- 1:36:00 -->