<?php
// Controleur qui gère l'affichage du détail d'un livre
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/userManager.php";



$userToAdd = new UserManager();
if(isset($_POST) && !empty($_POST)){
    $newUser = new User($_POST);
    $result = $userToAdd->addUser($newUser);
}



include "view/newUserView.php";

include "view/template/footer.php";