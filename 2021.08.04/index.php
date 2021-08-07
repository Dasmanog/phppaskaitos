
<?php

//1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.
//1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

// echo "<pre>";

$masyvas = [];

for ($i = 0; $i < 30; $i++) {
    $masyvas[] = rand(20, 40);
}

for ($i = 0; $i < count($masyvas); $i++) {
    //echo $masyvas[$i] . " ";
}

// echo "</pre>";
echo "<hr>";

//2. sukurkite masyvą su 10 skaičių nuo 0 iki 10

$masyv = [];

for ($i = 0; $i < 10; $i++) {
    $masyv[] = $i;
}
print_r($masyv);


//2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20
//2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
//t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.

//$masyv2 = []; // nebutina rasyti, nebent norim sau, kad nuosekliau atrodytu kodas. 
$masyv2[10] = $i;

for ($i = 11; $i < 20; $i++) {
    $masyv2[] = $i;
}
print_r($masyv2);

echo "<br>";
echo "<hr>";



for ($i = 0; $i < 100; $i++) {
   echo $neww[] = rand(0, count($masyv2) - 1) . " ";
}
//print_r($neww);
echo "<hr>";


//------------------------------------------------------------------//

//3. sukurkite dvimatį masyvą.  pirmas matmuo - 10 elementų.  antras 10 elementų. reikšmės - skaičiai nuo 0 iki 9. 
//3b. atspausdinkite duomenis. (gausis skaičių stačiakampis). 
echo "3 uzdavinys" . "<br>";
echo "<br>";
echo "<br>";
//echo "<pre>";
$masyvaS = [];

for ($i = 0; $i < 10; $i++) {
    //$masyvas[] = $i;
    for ($j = 0; $j < 10; $j++) {
      //echo  $masyvaS[$i][] = $j;
      //for ($k = 0; $k < 10; $k++) {
        echo  $masyvaS[$i][] = $j . " ";
        
  //  }

}
echo "<br>"; 
}
echo "<hr>";
//---------------------------------------------------------

//3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu
echo "3c uzduotis <br><br><br>"; 
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo  pow($masyvaS[$i][] = $j *  $masyvaS[$i][] = $j, 2). " ";//pakeltakvadratu.
        
    }
    echo "<br>"; 
}



//--------------------------------------------------------------------//


// 4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.

// raktažodžiai (key): "species","age", "name", "description". 
//Tai bus vienas objektas, vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.
echo "<hr>";

$gyvunas = ['species' => "begemotas", "age" => 20, "name" => "Arthur", "description" => "be nosies"];//key+value principas
print_r($gyvunas);

  
echo "<hr>";

//---------------------------------------------------------------------//
//5. sukurkite tris masyvus:
//$names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. 
// $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. 
// $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
//reikia  po 10.

$masyvas = [
    $names = ["vardas1", "vardas2", "vardas3", "vardas4", "vardas5", "vardas6", "vardas7", "vardas8", "vardas9", "vardas10"],
    $species = ["kengūra", "gazelė", "liūtas", "avis", "bitė", "elnis", "karvė", "kiaulė", "šuo", "putpelė"],
    $descriptions = ["gražus bet piktas", "pastoviai miega", "šauniai maskuojasi", "tyliai dūzgia", "greitai bėga", "dideli ragai", "taria: mūūūūū", "deda kiaušinius", "garsiai/tyliai loja", "kriuksi, visada kriuksi"]
];
//print_r($names[0] . " - " .  $species[7] . " : " . $descriptions[9] . ".");

echo "<hr>";

//5b. sukurkite dvimatį masyvą iš 20 elementų.  
//didžiąjame masyve bus sudėti mažesni masyvai, iš eilės. 
//maži masyvai bus tokie patys kaip 4. užduotyje. 
//jų reikšmes užpildykite 5. masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
// 5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.

echo "5 uzduotis <br><br>";

$masGeneral = [
    $names = ["vardas1", "vardas2", "vardas3", "vardas4", "vardas5", "vardas6", "vardas7", "vardas8", "vardas9", "vardas10"],
    $species = ["kengūra", "gazelė", "liūtas", "avis", "bitė", "elnis", "karvė", "kiaulė", "šuo", "putpelė"],
    $descriptions = ["gražus bet piktas", "pastoviai miega", "šauniai maskuojasi", "tyliai dūzgia", "greitai bėga", "dideli ragai", "taria: mūūūūū", "deda kiaušinius", "garsiai/tyliai loja", "kriuksi, visada kriuksi"]
];
//print_r($masGeneral);
for ($i = 0; $i < 20; $i++) {
  echo $zoo[$i][] = $names[rand(0, count($names) - 1)] . " ";
  echo $zoo[$i][] = $species[rand(0, count($species) - 1)] . " ";
  echo $zoo[$i][] = $descriptions[rand(0, count($descriptions) - 1)] . " ";
  echo $zoo[$i]['age'] = rand(0, 12);
  echo "<br>";
}// taip uzrasius viskas susimaiso, gaunasi random funkcija, amziu random prisikiria. 
//tai gaunasi, kad kiekviena karta pravedus cikla, skaitoma kiekviena eilute zemyn iki galo, ir tik tada vel ciklas kartojasi. 

//foreach ($zoo as $animal) {
    //    echo $animal['names'] . " " . $animal['species'] . " " . $animal['descriptions'] . " " . $animal['age'] . " ";
    // }



// $i = array_fill(0, 1, $names);  
// $j = array_fill(0, 1, $species);
// $k = array_fill(0, 1, $descriptions);
// print_r($i);
// echo "<br>";
// print_r($j);
// echo "<br>";
// print_r($k);



echo "<hr>";

//------------------------------------------------------------------//
//6. padarykite daugybos lentelę nuo 1 iki 9.
echo "6 uzduotis <br>";
for ($i=1; $i < 10; $i++) { 
    for ($j=1; $j < 10; $j++) { 
        echo $i * $j;
    }
echo "<br>";
}








//du while\
//sugalvoti du kintamieji (i ir j)
// ne mano kodas. Interneto. Tik analizei pasiemiau. 
// $i = 1; //rows 

// while ($i < 10) { // while'as nurodo, jog bus atliekama iki  kol bus daugiau uz 10.
//     echo "\t<tr>\n"; // row, kad butu eile.



//     $j = 1; //columns

//     while ($j < 11) {//while'as nurodo, kad bus dauginama 10 skaiciu.
//         echo "\t\t<td>$i * $j = " . $i * $j . "</td>\n"; //eilutes sablonas, kuria atliekamas veiksmas. 
//         $j++;
//     }

//     echo "\t</tr>\n"; // 
//     $i++;
// }

//echo "</table>";



?>
 



