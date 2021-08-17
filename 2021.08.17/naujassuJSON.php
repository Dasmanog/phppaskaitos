<?php
//JSON(javascript object notation) - jis buvo sukurtas tam, kad programavimo kalbos tarpusavyje galetu komunikuoti. 

//file_get_contents(); iraso faila
//file_put_contents(); nuskaito faila ir grazina atgal ka perskaito
//json_decode(); is json atkoduoti i php suprantama kalba
//json_encode();  pavercia ka gauna i json. 


$arr = ["key" => "value", "name" => "Petras"];

print_r($arr);
echo "<br>";


//----------- CONVERTUOJA I JSONA. [vienas tekstas, masyvas] = vienas stringas. {Grazina stringa}---------------------------//
 echo json_encode($arr); 

 //-----------NUSKAITO FAILA IR GRAZINA ATGAL KA PERSKAITO--------------------------------------//
 //pasiduoda du parametrai: kur saugom(nes susikuria naujas failas), ir ka mes saugom, iskart galim paduoti encode funkcija, kad atverstu i json ir seivintu nurodytam faile. 
 file_put_contents("./data.txt", json_encode($arr));
 echo "<br>";

 

//--------------------IRASO FAILA------------------------------------------//
// toks uzrasymas tiesiog atvaizduoja stringa, realiai ta pati padaro, ka ir  sitas(file_put_contents("./data.txt", json_encode($arr));)
  echo file_get_contents("./data.txt");// Grazina duomenis JSON formatu. KAI MES NORIM GAUTI DUOMENIS, MES PASAKOM IS KUR MES NORIM JUO GAUTI. 
  echo "<br>";



//-----------------GAUNAM OBJEKTA-------------------------------------------//
// nueik ir gauk faila, sitoj vietoj gavo. Atkoduok ta stringa. Iskart turim data. 
$data = json_decode(file_get_contents("./data.txt"), 1); //grazina objekta jeigu rasom ta pati TIK BE VIENETO.
//jeigu norim kad grazintu masyva, per kableli irasom 1. 
print_r($data);
echo "<br>";


// kai redaguojam duomenis, mes is tikruju neredaguojam failo. 
//mes pasiimam reiksmes, pasiverciam i masyva. 
// tame masyve pakeiciam reiksmes ir ta masyva issaugom ant virsaus. 
//irasom is naujo faila, ant virsaus (data.txt). 


?>