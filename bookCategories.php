<?php
$booksCategories = new BookManager();
$booksCategories = $booksCategories->getBooksCategories();
foreach ($booksCategories as $key => $booksCategorie){
    $booksCategories[$key]= $booksCategories[$key]["category"];
}
$booksCategories = array_unique($booksCategories);
