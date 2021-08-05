
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
    $masyv[] = rand(0, 10);
}



//2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20
//2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
//t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.

$masyv2 = [];

for ($i = 0; $i < 10; $i++) {
    $masyv2[$i] = rand(0, 10);
}

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < count($masyv2); $j++) {
        //echo $masyv2[$j] = rand(0,10) . " " . "<br>";
    }
}

echo "<hr>";





//------------------------------------------------------------------//

//3. sukurkite dvimatį masyvą. 
//pirmas matmuo - 10 elementų. 
//antras 10 elementų.
//reikšmės - skaičiai nuo 0 iki 9.

echo "<pre>";
$masyvaS = [[]];

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $masyvaS[$i][] = $j;
    }
}
print_r($masyvaS);
echo "<hr>";
//---------------------------------------------------------

//3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

//3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu



//--------------------------------------------------------------------//


// 4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.

// raktažodžiai (key): "species","age", "name", "description". 
//Tai bus vienas objektas, vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.


$gyvunas = ['species' => "begemotas", "age" => 20, "name" => "Arthur", "description" => "be nosies"];
//print_r($gyvunas);


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


$masGeneral = [
    $names = ["vardas1", "vardas2", "vardas3", "vardas4", "vardas5", "vardas6", "vardas7", "vardas8", "vardas9", "vardas10"],
    $species = ["kengūra", "gazelė", "liūtas", "avis", "bitė", "elnis", "karvė", "kiaulė", "šuo", "putpelė"],
    $descriptions = ["gražus bet piktas", "pastoviai miega", "šauniai maskuojasi", "tyliai dūzgia", "greitai bėga", "dideli ragai", "taria: mūūūūū", "deda kiaušinius", "garsiai/tyliai loja", "kriuksi, visada kriuksi"]
];
//print_r($masGeneral);
for ($i = 0; $i < 10; $i++) {
   // echo  $names[$i] . "=>" .  $species[$i] . "=>" . $descriptions[$i] . "<br>";
}





// $i = array_fill(0, 1, $names);  
// $j = array_fill(0, 1, $species);
// $k = array_fill(0, 1, $descriptions);
// print_r($i);
// echo "<br>";
// print_r($j);
// echo "<br>";
// print_r($k);


// 5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.

echo "<hr>";

//------------------------------------------------------------------//
//6. padarykite daugybos lentelę nuo 1 iki 9.


//du while\
//sugalvoti du kintamieji (i ir j)

// ne mano kodas. Interneto. Tik analizei pasiemiau. 
$i = 1; //rows

while ($i < 10) { // while'as nurodo, jog bus atliekama iki  kol bus daugiau uz 10.
    echo "\t<tr>\n"; // row, kad butu eile.



    $j = 1; //columns

    while ($j < 11) {//while'as nurodo, kad bus dauginama 10 skaiciu.
        echo "\t\t<td>$i * $j = " . $i * $j . "</td>\n"; //eilutes sablonas, kuria atliekamas veiksmas. 
        $j++;
    }

    echo "\t</tr>\n"; // 
    $i++;
}

echo "</table>";



?>
 



