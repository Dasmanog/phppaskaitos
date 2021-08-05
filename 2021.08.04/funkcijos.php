<?php

// 1. sukurkite funkciją kuri išspausdina kokį nors tekstą.


text();

function text()
{
        echo "tekstas";
}
echo "<hr>";
// 1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" tas paduotas kintamasis.


textLab($greeting = "labas");

function textLab($greeting)
{
        echo $greeting;
}

echo "<hr>";
//1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

myPi();
//round();
function myPi()
{
        echo pi();
//         function round()
//         {
//          var_dump(round(0,PHP_ROUND_HALF_UP, pi()));       
//         }
 }

// 1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.


// 1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
 // bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.




// 1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
// bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.



 // 1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
 // ir atspausdina: apskritimo ilgis: (tai ka gražino funkcija 1f) apskritimo plotas: (tai ka gražino funkcija 1g).
