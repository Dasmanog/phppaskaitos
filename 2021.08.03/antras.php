<?php
//2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, 
//o antrasis tago numeris (1-6). 
//Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;


mcDonald(
    $mesainis = "Sūrainis", 
    $bulvytes= 3
);


function mcDonald( $mesainis, $bulvytes)
{
echo "<h$bulvytes . >" . $mesainis . "</h$bulvytes>";
//echo $bulvytes;
}
 
?>