<?php

function init()
{
    session_start();
    if( !isset( $_SESSION['olympic'])  ){
        $_SESSION['olympic'] = [];
        $_SESSION['id'] = 1;
    }
}

function edit(){
    foreach ($_SESSION['olympic'] as $player) {
        if($player['id'] == $_GET['id']){
           return $player;
        }
     }
}

function store(){
    $player['id'] = $_SESSION['id'];
    $player['name'] = $_POST['name'];
    $player['surname'] = $_POST['surname']; 
    $player['sport'] = $_POST['sport']; 
    $player['country'] = $_POST['country'];
    $player['gender'] = $_POST['gender'];
    $player['victories'] = $_POST['victories'];
    $_SESSION['id']++;
    $_SESSION['olympic'][] = $player;
}

function destroy(){
   foreach ($_SESSION['olympic'] as $key => $player) { 
    if ($player['id'] == $_POST['id']) { 
        unset($_SESSION['olympic'][$key]);
         return;
        }
    }
}


function update(){
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
