<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri == '/index.php'){
    require_once "Template/Biens/voirTousLesBiens";
}