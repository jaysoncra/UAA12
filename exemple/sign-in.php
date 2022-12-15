<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>join us</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li class="menu"><a href="profil.php">Page profil</a></li>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="sign-in.php"><ion-icon size="large" name="log-in-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="sign-up.php"><ion-icon size="large" name="add-outline"></ion-icon></a></li>
            <li class="menu"><a href="sign-in.php">Sign in</a></li>
            <li class="menu"><a href="sign-up.php">Sign up</a></li>
        </ul>
    </header>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <form action="" method="post">
        <div>
            <label for="pseudo">Pseudo&nbsp;:</label>
            <input type="text" id="pseudo" name="user_pseudo">
        </div>
        <div>
            <label for="pass">Password(8 carractères minimum):</label>
            <input type="password" id="pass" name="password" minlength="8" required>
        </div>
        
    </form>
    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
</body>
</html>