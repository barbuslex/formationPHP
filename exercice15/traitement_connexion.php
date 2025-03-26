<?php 
if($_POST) {
    if(empty($_POST['username'])) {
        die("Le nom d'utilisateur doit être saisie !");
    }
    
    setcookie('username', $_POST['username']);
    header('Location: index.php?p=welcome');
}