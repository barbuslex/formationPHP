<?php

use App\Autoloader;
use App\Models\UsersModel;

require_once 'Autoloader.php';
Autoloader::register();

$email = 'admin@admin.fr';
$password = 'admin';

$email = strip_tags($email);
$password = password_hash($password, PASSWORD_ARGON2I);

$user = new UsersModel;
$user->setEmail($email)
    ->setPassword($password);

if($user->create()) {
    exit("Utilisateur créé");
}
else {
    exit("Impossible de créer l'utilisateur");
}
