<?php
// Controleur qui gère l'affichage du détail d'un livre
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/bookManager.php";
require_once "model/userManager.php";

// affiche un livre grâce à l'ID passée en URL
if (isset($_GET) && !empty($_GET)){
    $bookShowed = new BookManager();
    $book = $bookShowed->getBook(htmlspecialchars($_GET["id"]));
}

// Permet de remplir le champ user_id ou de le vider en cas de restitution
if (isset($_POST["user_id"]) || isset($_POST["bookStatusSwitch"]) ){
    $userID =(!empty($_POST["user_id"]))? intval(htmlspecialchars($_POST["user_id"])):NULL;
    $bookStatus = $bookShowed->updateBookStatus($book, $userID);
}

// affiche le nom de l'utilisateur qui l'a en sa possession et permet d'aller sur sa fiche directement
if ($book->getUser_id() !==0){
    $user = new UserManager();
    $user= $user->getUserById($book->getUser_id());
}



if (isset($_POST["bookSuppress"]) && ($book->getUser_id() == NULL)){
    $bookToSuppr = new BookManager();
    $result = $bookToSuppr->suppressBook($book);
}

include "view/bookView.php";
include "view/template/footer.php";