<?php
// Controlleur qui gérer l'affichage de tous les livres
include "view/template/header.php";
include "view/template/nav.php";
require_once "model\bookManager.php";

$bookslist =new BookManager();

if (isset($_POST["dispo"]) && ($_POST["dispo"]=="tag")){
    $books = $bookslist -> getFreeBooks();
}
else {
    if (empty($_POST) || ($_POST["CategorySelect"] == "aucun"))
    {
        $books = $bookslist -> getBooks();
    }
    else {
        $books = $bookslist -> getOrderedBooks($_POST ["CategorySelect"]);
    }
}




include "bookCategories.php";

include "view/indexView.php";

include "view/template/footer.php";