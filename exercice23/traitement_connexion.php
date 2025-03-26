<?php 
session_start();

require('bdd.php');

if($_POST) {
    if(empty($_POST['username'])) {
        die("Le nom d'utilisateur doit être saisie !");
    }
    
    $sql = "SELECT * FROM utilisateurs WHERE LOWER(username) = LOWER(:nom_utilisateur)";
    $query = $db->prepare($sql);
    $query->execute([
        'nom_utilisateur' => $_POST['username']
    ]);

    if(!$query->fetch()) {
        die("Utilisateur introuvable !");
    }
    
    $_SESSION['username'] = $_POST['username'];

    $sql = "INSERT INTO connexions
            (id, connexion_date, username)
         VALUES
            (null, SYSDATE(), :nom_utilisateur)";

    $query = $db->prepare($sql);

    $query->execute([
        'nom_utilisateur' => $_POST['username']
    ]);

    header('Location: welcome');
}