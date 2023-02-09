
<?php

try {
    $strConnection ='mysql:host=10.10.51.252;dbname=immobilier';

    $dbh = new PDO($strConnection, "jayson", "root", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die ("ERREUR : " . $e -> getMessage());
}
?>