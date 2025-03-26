<?php 
session_start();
if($_POST) {
    if(empty($_POST['username'])) {
        die("Le nom d'utilisateur doit être saisie !");
    }
    
    $_SESSION['username'] = $_POST['username'];

    $logfile = 'connexion.log';
    $logmessage = date('d/m/Y H:i:s')." - ".$_POST['username'].PHP_EOL;
    file_put_contents($logfile, $logmessage, FILE_APPEND);

    header('Location: index.php?p=welcome');
}