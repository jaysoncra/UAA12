<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Jayson</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<!-- traitement -->
<?php 
    function pgcd($nbr1, $nbr2){
        $reste = $nbr2;
        
        while ($reste != 0 ){
              
            $reste = $nbr1 % $nbr2; 
            $nbr1 = $nbr2; 
            $nbr2 = $reste; 
        }    
            return $nbr1;
    }
    
    function special($nombreDepart, $nombreElementsSouhaite){
        $suite = " " . $nombreDepart . " ";
    
    for ($i=1; $i < $nombreElementsSouhaite; $i++) { 
        if (($nombreDepart < 5) && ($nombreDepart % 3 != 0)) {
            $nombreDepart = $nombreDepart * 5;
        } 
        elseif (($nombreDepart > 5) && ($nombreDepart < 10)) {
            $nombreDepart = $nombreDepart / 6;
        } 
        else {
            $nombreDepart = $nombreDepart * $nombreDepart;
        } 
        $suite = $suite . $nombreDepart . " ";
    }
    return $suite;
    }

?>


<!-- affichage -->
    <ul>
        <li><a href="connexion.php">Connexion</a> </li>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="formulaire.php">Contact</a></li>
    </ul>
    
    <h1>Animalerie Tom&Co</h1>

    <h5>Je veux des belles fonctions php (séparer analyse et affichage dans votre fichier)</h5>

    <p>Voici une suite bien special: <?= special(5, 7)?> </p>

    

   
    
    <p>Le PGCD entre 21 et 15 vaut <?= pgcd(21,15); ?> </p>
</body>
</html>