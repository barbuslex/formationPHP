<?php 
session_start();
if($_POST['username']) {
    $_SESSION['username'] = $_POST['username'];
    header('Location: index.php?p=welcome');
}