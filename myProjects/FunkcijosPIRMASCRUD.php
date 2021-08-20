<?php

init();

function init()
{
    session_start();

    if( !isset( $_SESSION['physics'])  ){

        $_SESSION['physics'] = [];
        $_SESSION['id'] = 1;
    }
}




//kai suvedu sita funkcija, tada pradeda kaupti duomenis sessione. 
function edit(){

    foreach($_SESSION['physics'] as $element){

        if ($element['id'] == $_GET['id']) {
            return $element;
        }
    }
}





function store(){

    $physics = []; // vėliau nutrinti
    $physics['id'] = $_SESSION['id'];
    $physics['main_quantity'] = $_POST['main_quantity'];
    $physics['symbol'] = $_POST['symbol'];
    $physics['si'] = $_POST['si'];
    $physics['abbreviation'] = $_POST['abbreviation'];

$_SESSION['id']++;

$_SESSION['physics'][] = $physics;

}





function destroy(){

    foreach ($_SESSION['physics'] as $key => $physics) {

        if ($physics['id'] == $_POST['id']) {
            unset($_SESSION['physics'][$key]);
            return;
        }
    }
}





function update(){
    foreach($_SESSION['physics'] as &$physics){

        if ($physics['id'] == $_POST['id']) {
            
            $physics['main_quantity'] == $_POST['main_quantity'];
            $physics['symbol'] == $_POST['symbol'];
            $physics['si'] == $_POST['si'];
            $physics['abbreviation'] == $_POST['abbreviation'];
       return;
        }
    }
}
