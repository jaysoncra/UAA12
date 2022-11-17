<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Jayson</title>
</head>
<body>
    <?php 
    echo "<h1>Exercice 0</h1>";
    echo "<p>Hello Word</p>";
    
    echo "<h1>Exercice 1</h1>";
    
    for ($i = 1 ; $i <= 10 ; $i++)

    {
    
    Echo "<p>le compteur vaut  = " . $i ."</p>" ;
    
    }
    
    echo "<h1>Exercice 2</h1>";
    for ($i = 1 ; $i <= 10 ; $i++){
        if($i != 3 )
        echo "<p>le compteur vaut  = " . $i ."</p>";
    }
    
    echo "<h1>Exercice 3</h1>";
    for ($i = 1 ; $i <= 10 ; $i++){
        if($i > 7 || $i < 4 )
        echo "<p>le compteur vaut  = " . $i ."</p>";
    }

    
    ?>
</body>
</html>