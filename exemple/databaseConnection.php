
<?php

try {
    $strConnection ='mysql:host=10.10.51.98;dbname=immobilier';

    $pdo = new PDO($strConnection, "jayson", "root");
    die ("Connexion réussie");
} catch (\Throwable $e) {
    die ("ERREUR : " . $e -> getMessage());
}
?>