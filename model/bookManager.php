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
    $query = $this->getDB()->prepare(
      "SELECT *
      FROM book
      WHERE id = :book_id"
      );
      $query->execute([
        "book_id" => $book_id
      ]);
      $book =$query -> fetchAll(PDO::FETCH_ASSOC);
      $book = new Book($book[0]);
      return $book;
  }

  // Ajoute un nouveau livre
  public function addBook(Book $book):bool {
    $query = $this->getDB()->prepare(
      "INSERT INTO book(title, author,summary, category, publication_date)
        VALUES(:title, :author, :summary, :category, :publication_date)
      ");
    $result=$query->execute([
      "title" => $book->getTitle(),
      "author" => $book->getAuthor(),
      "summary" => $book->getSummary(),
      "category" => $book->getCategory(),
      "publication_date" => $book->getPublication_date()
    ]);
      return $result;
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $book, ?int $userID):bool {
    var_dump($userID);
    if (empty($userID)){
      $userID = NULL;
    }
    $query = $this->getDB()->prepare(
      "UPDATE book
      SET user_id =:user_id
      WHERE id = :book_id
      ");
    $result=$query->execute([
      "user_id" => $userID,
      "book_id" => $book->getId()
    ]);
    header("Location:index.php");
    exit();
    return $result;
  
  }

}
