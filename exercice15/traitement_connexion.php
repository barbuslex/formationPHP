<?php 
if($_POST['username']) {
    setcookie('username', $_POST['username']);
    header('Location: index.php?p=welcome');
}