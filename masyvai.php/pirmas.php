<?php
//1.	Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.+

$masyvas = [];

for ($i=0; $i <30 ; $i++) { 
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);

?>
