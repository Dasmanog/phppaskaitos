<!-- 8.	Sukurkite du puslapius pink.php ir rose.php. 
Nuspalvinkite juos atitinkamo spalvom. 
Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”.
 Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje.
  Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį.  -->
 
 <?php
  $color = "palevioletred";
  if($_SERVER['REQUEST_METHOD'] =="GET"){//jeigu kreipiasi per geta, padaryti, kad vestu i kita puslpai, ir tik tada kai spaudzia mygtuka, tik tada gali patekti i nurodyta puslapi. 
  header("location:./pink.php");
  die;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
       .bg-color {
           background-color: <?= $color ?>
       }
   </style>
<body class="bg-color">
   </form>
</body>

</html>