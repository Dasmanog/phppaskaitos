<?php
// 2.	Naudodamiesi 1 uždavinio masyvu:
// a.	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10; 
$masyvas = [];
$count = 0;

for ($i=0; $i <30 ; $i++) { 
    $masyvas[] = rand(5, 25);
    if ($masyvas[$i] > 10) {
       $count++;  
    }
}
echo "<pre>";
echo "<br>";
//print_r($masyvas);
echo "<hr>";
echo $count . " Skaičių, kurie daugiau už dešimt ";




// b.	Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli; 
echo "<br>";
echo "<hr>";
$naujasM = [];
echo max($masyvas) . " Didžiausia reikšmė";
echo "<hr>";

for ($i=0; $i < count($masyvas); $i++) { 
    if(max($masyvas) <= $masyvas[$i]){
       print_r($naujasM[] = [$i]); 
    }
}
echo "<hr>";




// c.	Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
$poriniai = 0;
$neporiniai = 0;


//print_r($masyvas);

    for ($i=0; $i < count($masyvas) ; $i++) { 
        if ($masyvas[$i] % 2 == 0) {
            $poriniai++;  
        }else{
            $neporiniai++;
        }
    }
print_r($poriniai); 
echo  " Porinių";
echo "<br>";
print_r($neporiniai); 
echo " Neporinių";
echo "<hr>";

// d.	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas; PAVYKOOOOOOO!
echo "D variantas --------------------";
$newArr = [];
//print_r($masyvas);

for ($i=0; $i <count($masyvas) ; $i++) { 
   $newArr[] = $masyvas[$i] - $i;
}
//print_r($newArr);
echo "<hr>";


// e.	Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
echo "E variantas --------------------";
$masyvasNew [10] = rand(5, 25);
//print_r($masyvasNew);

for ($i = 0; $i < 10; $i++)
{
    $masyvas[] = ($masyvasNew[10] = rand(5, 25)); 
}

print_r($masyvas);
echo "<hr>";






?>