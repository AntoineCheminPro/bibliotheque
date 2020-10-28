<?php
// Controleur qui gère l'affichage du détail d'un utilisateur
include "view/template/header.php";
include "view/template/nav.php";

if (isset($_GET) && !empty($_GET)){
$user = new UserManager();
$user = $user->getUserById(htmlspecialchars($_GET["id"]));
}

$books = new BookManager();
$books = $books->getBooksByUserId($user);

include "view/userView.php";

include "view/template/footer.php";