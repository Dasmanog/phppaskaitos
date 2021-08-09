<?php

// 1. sukurkite funkciją kuri išspausdina kokį nors tekstą.

echo " 1a. <br>";
text();

function text()
{
        echo "tekstas";
}
// 1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" tas paduotas kintamasis.
echo "<hr>";
echo " 1b. <br>";

textLab($greeting = "labas");

function textLab($greeting)
{
        echo $greeting;
}

echo "<hr>";


//1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

echo " 1c. I variantas. <br>";
myPi($pi );
//round();
function myPi()
{
        return 3.1415926;


echo "<hr>";
echo " 1c. II variantas. <br>";
echo myPi1();

function myPi1()
{
        return 3.1415926;
}

//         function round()
//         {
//          var_dump(round(0,PHP_ROUND_HALF_UP, pi()));       
//         }


// 1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.
echo "<hr>";
echo " 1d. <br>";

echo multiply(60, 60) * multiply(365, 24); // funkcija su funkcija, kuri yra funkcija su funkcijos rezultatu ir mes gauname superini rezultata. 
echo "<hr>";
echo multiply(60, multiply(60, multiply(365, 24))); // spausdina ta pati ka ir zemiau. 31536000

function multiply($a, $b)
{
        return $a * $b;
}


// 1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
// bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
//pi r kvadratu
echo "<hr>";
echo " 1e. <br>";

//echo circleSq(2);

function circleSq($r)
{
        return myPi1() * $r * $r;
}




// 1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
// bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
echo " 1f. <br>";

function circleLength($r)
{
        return 2 *  myPi1() * $r;
}

echo circleLength(2) . " <br>" . circleSq(3);

 // 1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
 // ir atspausdina: apskritimo ilgis: (tai ka gražino funkcija 1f) apskritimo plotas: (tai ka gražino funkcija 1g).
 echo "<hr>";
 echo " 1g. <br>";

 function info($r){
      echo   "apskritimo ilgis: " . circleLength($r) . "<br>";
        echo  "apskritimo plotas: " . circleSq($r) . "<br>";
 }
 echo info(20);