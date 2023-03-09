<?php

$uri = $_SERVER["REQUEST_URI"];

if($uri === "/index.php" || $uri === "/"){
    require_once "Templates/biens/voirTousLesBiens.php";
}elseif ($uri === "/voirLeBien") {
    require_once "Templates/biens/voirLeBien.php";
}