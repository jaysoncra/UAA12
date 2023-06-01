<?php

function createUser($pdo){
    try {
        $query = "insert into utilisateurs(nomUser, prenomUser, loginUser, passWordUser, role) values (:nomUser, :prenomUser, :loginUser, :passWordUser, :role)";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'nomUser' => $_POST['nom'],
            'prenomUser' => $_POST['prenom'],
            'loginUser' => $_POST['login'],
            'passWordUser' => $_POST['mot_de_passe'],
            'role' => 'user'
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function ChercherUser($pdo){
    try {
        $query = "select * from utilisateurs where loginUser=:loginUser and passWordUser=:passWordUser";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'loginUser' => $_POST['login'],
            'passWordUser' => $_POST['mot_de_passe'],
        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


/*try {
    $query = "SELECT * FROM biens";
    $ajoute = $pdo->prepare($query);
    $ajoute->execute();
    $biens = $ajoute->fetchAll();
} catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}
echo '<pre>' , var_dump($biens) , '</pre>';*/