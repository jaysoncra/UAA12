<?php

function triangleRectangle($C1, $C2, $C3)
{
if (($C1>=$C2)&&($C1>=$C3)) {
    $Pg = $C1;
    $Cote2 = $C2;
    $Cote3 = $C3;
}
elseif (($C2>=$C1) && ($C2>=$C3)) {
    $Pg = $C2;
    $Cote2 = $C1;
    $Cote3 = $C3;
}
else {
    $Pg = $C3;
    $Cote2 = $C1;
    $Cote3 = $C3;
}
if ($Pg<$Cote2 + $Cote3) {
    if (pow($Pg,2) == pow($Cote2,2) + pow($Cote3,2)) {
        if ($Cote2 == $Cote3) {
            $Message = "Triangle rectangle isocèle";
        }
        else {
            $Message = "Triangle rectangle";
        }
    }
    else {
        $Message = "Le triangle n'est pas rectangle";
    }
}
else {
    $Message = "Ces dimension ne peuvent être celles d'un triangle";
}
}

function chercheDiviseur ($nb)
{
$i = 1;
$diviseur = "";
while ($i <= $nb) {
    if ($nb%$i == 0) {
        $diviseur = $diviseur . $i . " ";
    }
    $i = $i + 1;
}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonction</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include ('include/header.php')?>

    
    
    <?php include ('include/footer.php') ?>
</body>
</html>








