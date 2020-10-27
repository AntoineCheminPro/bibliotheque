<?php
require_once "model/dataBase.php";
require "model/entity/book.php";

final class bookManager extends dataBase {

  // Récupère tous les livres
  public function getBooks():array {
    $query = $this->getDB()->prepare(
    "SELECT *
    FROM book"
    );
    $query->execute();
    $books =$query -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $key => $book) {
      $books[$key] = new Book($book);
    }
    return $books;
  }

  // Récupère un livre
  public function getBook($book_id):Book {

  }

  // Ajoute un nouveau livre
  public function addBook(Book $book):bool {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $book):bool {

  }

}
