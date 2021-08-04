<?php

// f.	Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
echo "F variantas --------------------";
echo "<hr>"; 


$masyvas = [];
$poriniai = [];
$neporiniai = [];

for ($i=0; $i <30 ; $i++) { 
    $masyvas[] = rand(5, 25);
}


foreach ($masyvas as $key => $value) {
   if ($key % 2 == 0){
       $poriniai = [$key];
       print_r($poriniai);
       echo "<br>";
       
   }echo "<br>";
   if ($key % 2 !=0){
       $neporiniai = [$key];
       print_r($neporiniai);
   }
}










// echo "Masyvas full" . "<br>";
// print_r($masyvas) . "<br><br><br>";

// for ($i=0; $i < count($masyvas); $i++) { 
//     if ($i % 2 ==0) {
//        $poriniai[] = $masyvas[$i];
//      }else{
//        $neporiniai[] = $masyvas[$i];
//      }
//    }
// echo  "Poriniai indeksai" . "<br>";
//      print_r($poriniai);
//      echo "<br>";
//    echo  "Neporiniai indeksai" . "<br>";
//      print_r($neporiniai);
 

//    echo "<hr>";
?>