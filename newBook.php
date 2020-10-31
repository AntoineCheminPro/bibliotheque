<?php
// Controleur qui gère l'affichage du détail d'un livre
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/bookManager.php";

$bookToAdd = new BookManager();
if(isset($_POST) && !empty($_POST)){
    if(isset($_POST["newCategory"]) && ($_POST["newCategory"] !=="") ){
        $_POST["category"] =$_POST["newCategory"];
    }
    $newBook = new Book($_POST);
    $result = $bookToAdd->addBook($newBook);
}

include "bookCategories.php";

include "view/newBookView.php";

include "view/template/footer.php";