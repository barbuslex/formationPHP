<?php 
session_start();
if(!$_SESSION['username']) {
    header('Location: ../connexion');
    exit();
}

require('bdd.php');

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    
    $sql = "DELETE FROM utilisateurs WHERE id=:id";
    $query = $db->prepare($sql);
    $result = $query->execute([
        'id' => $_GET['id']
    ]);
    if($result) {
        $_SESSION['alert'] = [
            'type' => 'success',
            'message' => "L'utilisateur n°".$_GET['id']." a été supprimé"
        ];
    }
    else {
        $_SESSION['alert'] = [
            'type' => 'danger',
            'message' => "Impossible de supprimer l'utilisateur ".$_GET['id']." : ".$query->errorInfo()
        ];
    }

    unset($_SESSION['username']);

    header('Location: ../utilisateur_liste');
    exit();
} 

die('Mauvaise requête');
