<?php

if(!isset($_GET['p']) || empty($_GET['p'])) {
    exit("Le paramètre de page est nécessaire pour afficher une page.");
}

$page = strtolower($_GET['p']).'.php';
if(!file_exists($page)) {
    exit("Page introuvable !");
}

include($page);
