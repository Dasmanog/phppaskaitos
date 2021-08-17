<?php
session_start();
$bgColor = 'black';
$showForm = true;

// scenarijus, kai apdorojame domenis gautus POST metodu
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $howManyCheckboxesTicked = count($_POST);
    $_SESSION['checked'] = $howManyCheckboxesTicked;
    header('Location:./puslapis.php');
    die;
}

// scenarijus, kai griztame i puslapi po POST duomenu apdorojimo
if (isset($_SESSION['checked'])) {
    $bgColor = 'white';
    $showForm = false;
    $checked = $_SESSION['checked'];
    $generated = $_SESSION['generated'];
    unset($_SESSION['checked']);
    unset($_SESSION['generated']);
};
  
// scenarijus, kuomet rodome forma su checkbox'ais
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uzdavinys</title>
    <style>
    body {
        background-color: <?=$bgColor ?>;
    }

    label {
        color: white;
    }

    h1 {
        color: red;
    }
    </style>
</head>

<body>
    <?php if ($showForm) { ?>
    <h1>formos viduje</h1>
    <form action="./puslapis.php" method="post">
        <?php
            $amount = rand(3, 10);
            $_SESSION['generated'] = $amount;
            for ($i = 0; $i < $amount; $i++) {
                $letter = range('A', 'Z')[$i];
                echo "<label><input type=\"checkbox\" name=\"$letter\"> $letter</label>";
            }
            ?>
        <button type="submit">siusti</button>
    </form>
    <?php } else {
        echo "<h1>$checked checked</h1>";
        echo "<h2>$generated generated</h2>";
    } ?>
</body>

</html>