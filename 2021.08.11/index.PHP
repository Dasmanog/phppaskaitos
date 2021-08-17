<?php



session_start(); //pirmas zingsnis pasileidus sesija yra - paklausiam apie kintamuosius ar jie egzistuoja. 
//sesijos paleidimas, nes kitaip ji neveikia.  sesija issisaugo ilgai, nebent istrinti fiziskai kukiuose(application/cookies).
if (!isset($_SESSION['zoo'])) {
    $_SESSION['zoo'] = [];
    $_SESSION['id'] = 1;
}
// $_SESSION['duomenys'] = $_GET['domuo'];

// echo "<pre>";
// print_r($_SESSION['zoo']);
// echo "</pre>";
//$_SESSION['id'] = 1;
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])) { //reikia atdiferencijuoti skirtingus get ir post tam tikrom funkcijom. 
    foreach ($_SESSION['zoo'] as $entry) { //cia yra sesija, kuri turi savyje kintamasis zoo, kuris turi savyje masyva animal
        if ($entry['id'] == $_GET['id']) { //su foreach mes sakom, kad imsim kiekvienais eiles irasa ir pasivadinsiu ji animal, 
            //tada jeigu nulinto gyvuno id atitinka ta id kuri as cia bandau redagoti, tada mes randam savo konkretu gyvuna. 
            $animal = $entry; //mes bandem susirasti gyvuna ir ji redaguoti. 
            break;
        }
    }


    // echo "kreipiuosi su get"; //sitas metodas padeda nustayti ar kreipiames su getu.  

}
if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])) { //jeigu asteinam su postu tai turbut mes ta gyvuna norim sukurti. 
    //Naujas gyvunas id visdar neturi nes igaunaja tik kai yra sukuriamas. 
    //Redaguojamas gyvunas turi id.
    //$animal = [];
    //masyvas uzpildytas key+ value principu.
    //php uztenka sugalvoti kintamaji ir priskirineti reiksmes. 
    $animal['id'] = $_SESSION['id'];
    $animal['species'] =  $_POST['species'];
    $animal['name'] =  $_POST['name'];
    $animal['age'] =  $_POST['age'];
    //    print_r($animal);    //atvaizduoja viskas issamiai, kaip masyva, jau priskiria i kategorijas. 
    $_SESSION['id']++;

    $_SESSION['zoo'][] = $animal;
    header("location:./"); //tam kad persikrovus puslapi, nebutu is naujo atliekamas paskutinis veiksmas, bet jau ateina su get'u.
    die;
}
if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['species'])) {
    foreach ($_SESSION['zoo'] as $key => $animal) { //atlieka masyvo failu atnaujinima i nauja reiksme kokia as suvedziau pildydama forma. 
        if ($animal['id'] == $_POST['id']) { //uzdetas & dar vadinamas ambersandas, surisa kopija su originalu, trada kai atliekam korekcija. 
            unset($_SESSION['zoo'][$key]);// bandom unsettinti sita konkretu elementa. 
            header("location:./");
            die;
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) { //tai ciabuvo edit gabalas. 
    foreach ($_SESSION['zoo'] as  &$animal) { //atlieka masyvo failu atnaujinima i nauja reiksme kokia as suvedziau pildydama forma. 
        if ($animal['id'] == $_POST['id']) { //uzdetas & dar vadinamas ambersandas, surisa kopija su originalu, trada kai atliekam korekcija. 
            $animal['species'] = $_POST['species'];
            $animal['name'] = $_POST['name'];
            $animal['age'] = $_POST['age'];
            header("location:./");
            die;
        }
    }

    // echo "updatinu gyvuna";// updatinu gyvuna pasako tada kai kad as einu su post metodu ir atsinesu id.
    // print_r($_SESSION);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>

<body>
    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gyvuno rusis</label>
            <div class="col-sm-4">
                <input class="form-control " type="text" name="species" value="<?= (isset($animal)) ? $animal['species']  : "" ?>">
                <!--species gyvuno rusis -->
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gyvuno vardas</label>
            <div class="col-sm-4">
                <input class="form-control " type="text" name="name" value="<?= (isset($animal)) ? $animal['name']  : "" ?>">
                <!--species gyvuno vardas -->
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gyvuno amzius</label>
            <div class="col-sm-4">
                <input class="form-control " type="text" name="age" value="<?= (isset($animal)) ? $animal['age']  : "" ?>">
                <!--species gyvuno amzius -->
            </div>

        </div>
        <?php if (!isset($animal)) { //jeigu tas kintamasis egzistuoja, tai mes dar turimme to gyvuno id paduoti.  
            echo '<button class="btn btn-primary" type="submit">prideti gyvuna</button>';
        } else {
            echo '<input type="hidden" name="id" value="' . $animal['id'] . ' ">' .
                '<button class="btn btn-info" type="submit">atnaujinti gyvuna</button>';
        } ?>
    </form>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>rusis</th>
            <th>vardas</th>
            <th>amzius</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        <?php foreach ($_SESSION['zoo'] as $animal) { //kiekvienas gyvunas, kuri istraukia is masyvo, tebunie tas itasis elementas vadinsis animal. 
        ?>

            <tr>
                <td> <?= $animal['id'] ?> </td>
                <!-- yra sesija, istrauki zoo soda, kiekviena itaji elementa pavadini animal tai yra paprasciau.-->
                <td> <?= $animal['species'] ?> </td>
                <!--sesija, joje esantis zoo sodas, tame esantis nulintasisi gyvunas ir to gyvuno rusis-->
                <td> <?= $animal['name'] ?> </td>
                <!--mano knkretaus gyvuno vardas rusis, vardas, amzius.     -->
                <td> <?= $animal['age'] ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $animal['id'] ?>">edit</a></td><!-- sukuriam unikalia reiksme, id, kurio skaicius negali pasikartoti, tam kad identifikuoti elementus.   -->
                <!--delete gabalas. Kad istrintu esancius masyvo duomenis.    -->
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $animal['id'] ?>">
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                    <!--  -->
                </td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>
<!-- 
    1.pirma posto forma id neturi, nes idedam nauja gyvuna.
    2. antra posto forma kai mes pasirenkam kazka redaguoti, paspaudziam atnaujinti.
    3. trecia kur yra postas ir id, kur yra ant delete mygtuko. 

    edit nuo delete mygtuko skiriasi 
    delete turi savyje turi input(species,age, name), tai as is esmes galeciau paklausti, 
    jeigu as kreipiuosi su postu bet nera issetinta kintamojo species, tada as trinu, nes jie turi tuyreti visus laukelius, tiek species, age, tiek name. 
 -->