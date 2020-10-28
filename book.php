<?php
// Controleur qui gère l'affichage du détail d'un livre
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/bookManager.php";
require_once "model/userManager.php";

if (isset($_GET) && !empty($_GET)){
    $bookShowed = new BookManager();
    $book = $bookShowed->getBook(htmlspecialchars($_GET["id"]));
}

if (isset($_POST) && !empty($_POST)){
    $userID =(!empty($_POST["user_id"]))? intval(htmlspecialchars($_POST["user_id"])):NULL;
    $bookStatus = $bookShowed->updateBookStatus($book, $userID);
}

$userSearch = new UserManager();
var_dump($book->getUser_id());

include "view/bookView.php";

include "view/template/footer.php";