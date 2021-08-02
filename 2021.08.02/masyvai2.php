<?php
//1. Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. +
//tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), priskirkite reikšmę “A”. 
//Likusiems nariams priskirkite reikšmę “B”. 
//Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
echo "1 uždavinys <br>";
$arr = [];

for ($i=0; $i < 101; $i++) { 
    $arr[] = rand(0, 100);
    if ($arr[$i] % 10 == 0) {
        $arr[$i] = "A"; 
    }else{
        $arr[$i] = "B"; 
    }
}
print_r($arr);



echo "<hr>";
//2. Pakeiskite pirmąjame uždavinyje sukurtą masyvą. 
//Visas masyvo reikšmes (“A” ir “B”) pakeiskite masyvais, 
//kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10. 
//Naujai sukurtų masyvų reikšmes užpildykite atitinkamai 
//“A” arba “B” stringais (pagal tai kokią raidę keičiate į masyvą). 
//Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
echo "2 uždavinys <br>";

$arr2 = [];
$arr3 = [];

for ($i=0; $i < count($arr); $i++) { 
    $arr2[] =rand(3, 10);
    $arr3[] = rand(3, 10);
    if ($arr[$i] == "A"){
        $arr2[] =  $arr[$i];   
        }else{
        $arr3[] = $arr[$i];
        }
}
print_r($arr2);
echo "<br>";
print_r($arr3);





echo "<hr>";
//3.Pakeiskite antrame uždavinyje sukurtą masyvą. 
//Visus antro lygio masyvus pailginkite iki 10 elementų. 
//Papildomai sukurtų elementų reikšmes užpildykite “C” stringais. 
//Jeigu masyvo ilgis jau yra 10, tai tokio masyvo keisti nereikia. 
//Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r(). 
//Papildomai: Suskaičiuokite kiek gautame masyve yra “A”, “B” ir “C” reikšmių ir rezultatą atspausdinkite.
echo "3 uždavinys <br>";
//-----



?>
