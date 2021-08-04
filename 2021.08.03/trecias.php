<?php
//3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
//Visus skaitmenis stringe įdėkite į h1 tagą. 
//Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu 
//(h1 atsidaro prieš pirmą ir užsidaro po paskutinio).


random();


function random(){
  
   if (is_numeric(md5(time()))) {
    echo "<h1>md5(time)</h1>";
   }else
   echo  md5(time());
}






?>
