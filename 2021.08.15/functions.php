<!-- 4. functions.php. susukuriame funkciją init. Ji patikrina ar sesijoje yra 'olympics' key, jei nėra - 
sukuria 'olympics' masyvą sesijoje bei 'id' kintamajį sesijoje. su defaultinėmis reikšmėmis, "[]" ir "0";
5. functions php paleisti init funkciją.
  -->
<?php


init();

function init()
{
    session_start();
    if (!isset($_SESSION['players'])) {
        $_SESSION['players'] = [];
        $_SESSION['id'] = 0;
    }
}






?>