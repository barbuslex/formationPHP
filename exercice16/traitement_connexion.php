<?php 
session_start();
if($_POST) {
    if(empty($_POST['username'])) {
        die("Le nom d'utilisateur doit être saisie !");
    }
    
    $_SESSION['username'] = $_POST['username'];
    header('Location: index.php?p=welcome');
}