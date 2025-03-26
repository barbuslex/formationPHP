<?php 
/*echo '<pre>';
var_dump($_SERVER);
echo '</pre>';*/
?>

<ul>
    <li>Adresse IP client: <?= $_SERVER['REMOTE_ADDR'] ?></li>
    <li>Nom du serveur: <?= $_SERVER['SERVER_NAME'] ?></li>
    <li>Port du serveur: <?= $_SERVER['SERVER_PORT'] ?></li>
    <li>Nom du script: <?= $_SERVER['SCRIPT_NAME'] ?></li>
    <li>Méthode de la requête: <?= $_SERVER['REQUEST_METHOD'] ?></li>
    <li>URL de la page: <?= "http://".$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'] ?></li>
</ul>