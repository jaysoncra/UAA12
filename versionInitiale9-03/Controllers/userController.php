<?php

require_once "Model/userModel.php";

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){
        createUser($pdo);
        header('location:/connexion');
    }
    require_once "Templates/users/inscriptionOrEditProfil.php";
}elseif ($uri === "/connexion") {
    if(isset($_POST["btnEnvoi"])){
        ChercherUser ($pdo);
        header('location:/');
    }
    require_once "Templates/users/connexion.php";
}elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
}elseif ($uri === "/profil") {
    require_once "Templates/users/profil.php";
}