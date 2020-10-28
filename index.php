<?php
// Controlleur qui gérer l'affichage de tous les livres
include "view/template/header.php";
include "view/template/nav.php";
require_once "model\bookManager.php";

$bookslist =new BookManager();
$books = $bookslist -> getBooks();

include "view/indexView.php";

include "view/template/footer.php";