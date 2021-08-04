<?php

// h.	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
$masyvas = [];
$poriniai = [];
$neporiniai = [];
echo "<pre>";


for ($i=0; $i <30 ; $i++) { 
    $masyvas[] = rand(5, 25);
}
echo "Masyvas full" . "<br>";
echo "<hr>";

for ($i=0; $i < count($masyvas); $i++) { 
  $poriniai[] = $i;
}print_r($poriniai);

for ($i=0; $i < count($poriniai); $i++) { 
  if($i % 2 !== 0){
    // echo $i." ";
    print_r($poriniai);
  }
  
}

// for ($i=0; $i < count($poriniai); $i++) { 
//     if ($i % 2 ==0) {
//     $poriniai = $masyvas[$i];
//     }
    
// }


// foreach($masyvas as $key) {
//    if($key % 2 ==0){
//      $poriniai = [$key];
//    }else{
//      $neporiniai = [$key];
//    }
// }
// for ($i=0; $i < count($poriniai); $i++) { 
//   echo $i;
// } 

// echo "<hr>";
//    echo "<br>";
// echo  "Poriniai indeksai" . "<br>";
//      print_r($poriniai);
//      echo "<hr>";
//    echo  "Neporiniai indeksai" . "<br>";
//      print_r($neporiniai);
// echo "<hr>";

?>