<?php

// g.	Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
$masyvas = [];
$poriniai = [];
$neporiniai = [];
echo "<pre>";
for ($i=0; $i <30 ; $i++) { 
    $masyvas[] = rand(5, 25);
}
echo "Masyvas full" . "<br>";
//print_r($masyvas) . "<br><br><br>";

for ($i=0; $i < count($masyvas); $i++) { 
    if ($i % 2 ==0) {
       $poriniai[] = $masyvas[$i];
     }else{
       $neporiniai[] = $masyvas[$i];
     }
   }
echo "<hr>";
   echo "<br>";
echo  "Poriniai indeksai" . "<br>";
     print_r($poriniai);
     echo "<hr>";
   echo  "Neporiniai indeksai" . "<br>";
     print_r($neporiniai);
echo "<hr>";

for ($i=0; $i < count($poriniai) ; $i++) { 
    if ($poriniai[$i] > 15) {
        $poriniai[$i] = 0; 
    }
}
echo "indeksai, kuriu reiksme yra daugiau uz 15 turi buti lygi nuliui" . "<br>";
print_r($poriniai); 

?>