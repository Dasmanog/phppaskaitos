<?php

$arr = [];

// for ($i=0; $i < count($arr); $i++) { 
//   if ($arr[$i] == "A") {
//     echo $i . " ";
//   }
// }



//---------------tas pats kas ir zemiau----------------------//
// echo "<hr>";
// print_r(range(14,20));
// for ($i=0; $i < 100; $i++) { 
  
// }


//---------------tas pats kas ir auksciau----------------------//
// foreach (range(0,100) as $key => $value) {
 
// }



//---------------FUNKCIJOS--------------------------------------//
//funkcijos iskvietimas
sayHi();
sayHi();
sayHi();
sayHi();
sayHi();
sayHiYou(" Vadimai");
sayHiYou(" Juste");
sum(74, 20, 4); 


$vardas = "Andrius";
sayHiYou($vardas);

function sayHiYou($name)
{
  echo "labukas " . $name . "<br>";
}


//-----------------------------------------------------------//
//funkcijos aprasymas, ka ji savyje daro ir ka turi. 
function sayHi()
{
  echo " labukas <br>  ";
}


//------------------------------------------------------------//


function funkcijos_pavadinimas () 
{ 
   echo "labas<br> ";
}

//----------------------------------------------------------//


function sum($a, $b, $c)
{
  echo ($a+$b)/$c . "<br>";
}

//-------------------------------------------------------//
//-----------funkcija kuri grazina-----------------------//

$truenumber = 22;
$pi = myPi() . "<br>" ;
echo $pi;
echo $truenumber * myPi() . "<br>";

function myPi(){    
  return 3.1428; 
}

//-------------------------------------------------------//

$suma = sumReal("kiaune",40);
echo $suma . "<br>";

function sumReal($a = 0, $b = 0){
   if (!is_numeric($a)  || !is_numeric($b)) {
    return false;
   }
  return $a+$b;
}
//--------------------------------------------------//
h1("kiaune");
h1("kiaule");
h1(" ");

function h1($text){
  echo   "<h1>" . $text . "</h1>";
}

recursion(5);

function recursion ($num){
  if ($num > 0) {
    recursion($num - 1);
  }
  echo $num . " ";
}


?>
