<?php


//----------------------------------------------------------------------------------------------------//
//JSON(javascript object notation) - jis buvo sukurtas tam, kad programavimo kalbos tarpusavyje galetu komunikuoti. 

//file_get_contents(); iraso faila
//file_put_contents(); nuskaito faila ir grazina atgal ka perskaito

//json_decode(); is json atkoduoti i php suprantama kalba
//json_encode();  pavercia ka gauna i json. 
//------------------------------------------------------------------------------------------------------//

// echo "<br>";



// $arr = ["key" => "value", "name" => "Petras"];

 //-----------NUSKAITO FAILA IR GRAZINA ATGAL KA PERSKAITO--------------------------------------//
 //pasiduoda du parametrai: kur saugom(nes susikuria naujas failas), ir ka mes saugom, iskart galim paduoti encode funkcija, kad atverstu i json ir seivintu nurodytam faile. 
//  file_put_contents("./data1.txt", json_encode($arr));



//-----------------GAUNAM OBJEKTA-------------------------------------------//
// nueik ir gauk faila, sitoj vietoj gavo. Atkoduok ta stringa. Iskart turim data. 
$data = json_decode(file_get_contents("./data1.txt"), 1); //grazina objekta jeigu rasom ta pati TIK BE VIENETO.
//jeigu norim kad grazintu masyva, per kableli irasom 1. 
$data['surname'] = 'Jurgis';

file_put_contents("./data.txt", json_encode($data) );
print_r($data);
echo "<br>";

// ----------------------iki 1:21:00----------------------------------//


?>