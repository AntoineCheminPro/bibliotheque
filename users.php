<?php
// Controleur qui gère l'affichage de tous les utilisateurs
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/userManager.php";

$userslist =new UserManager();
$users = $userslist -> getUsers();
var_dump($users);

include "view/template/footer.php";