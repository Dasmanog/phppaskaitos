<?php



// if (isset($_GET['vardas']) && isset($_GET['pavarde'])) {
//     echo "Labas " . $_GET['vardas'] . " " . $_GET['pavarde'] . ".";
// }

$name = "";
$surname = "";

if (isset($_GET['vardas'])) {
   $name = $_GET['vardas'];
}

if (isset($_GET['pavarde'])) {
   $surname = $_GET['pavarde'];
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

<body>
    <!--<h1><?= $_GET['vardas'] . " " . $_GET['pavarde'] ?></h1> -->
    <!-- <h1><?= (isset($_GET['vardas'])) ? $_GET['vardas'] : "" ?></h1> -->
<h1><?= $name  . " " . $surname?></h1>

    
    <form action="./web2.php" method="get">
        <input type="text" name="vardas">
        <input type="text" name="pavarde">

        <button type="submit">spausk </button>


    </form>

</body>

</html>