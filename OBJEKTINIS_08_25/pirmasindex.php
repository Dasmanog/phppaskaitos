<?php
include('./Plant.php');


$plant = new Plant(); //augalo susikurimas
print_r($plant);
echo "<br>";
$plant->name = "Agurkas";
$plant->is_yealing = true;
print_r($plant);
echo "<br>";
echo $plant->name;
echo "<hr>";

// $fakePlant['name'] = "agurkas";
// $fakePlant['is_yearling'] = true;

// print_r($fakePlant);


$plant2 = new Plant(); //augalo susikurimas
print_r($plant2);
echo "<br>";
$plant2->name = "Slyva";
$plant2->is_yealing = false;
var_dump($plant2); //var_dump galima naudoti, kai nesimato reiksme, pvz false ir nieko neatvaizduoja, 
//tai tam kad isitiktinti ar apskritai sureaguoja ir mato ka nurodom, gali padeti var_dump'as. 
echo "<br>";
echo $plant2->name;
echo "<hr>";


?>