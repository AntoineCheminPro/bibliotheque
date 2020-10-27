<?php
require_once "model/entity/Entity.php";

// Classe représetant les livres stockés en base de données
final class Book extends Entity {

    protected int $id;
    protected string $title;
    protected string $author;
    protected string $summary;
    protected string $category;
    protected string $publication_date;
    protected int $user_id;

    public function setId(int $id){
        $id = intval($id);
        $this->id=htmlspecialchars($id);
    }
    public function getId(){
      return $this->id;
    }

    public function setTitle(string $title) {
        $this->title=htmlspecialchars($title);
    }
    public function getTitle() {
        return $this->title;
    }

    public function setAuthor(string $author) {
        $this->author=htmlspecialchars($author);
    }
    public function getAuthor() {
        return $this->author;
    }

    public function setSummary(string $summary) {
        $this->summary=htmlspecialchars($summary);
    }
    public function getSummary() {
        return $this->summary;
    }

    public function setCategory(string $category) {
        $this->category=htmlspecialchars($category);
    }
    public function getCategory() {
        return $this->category;
        
    }
    public function setPublication_date(string $publication_date) {
        $this->publication_date=htmlspecialchars($publication_date);
    }
    public function getPublication_date() {
        return $this->publication_date;
    }

    public function setUser_id(string $user_id) {
        $user_id = intval($user_id);
        $this->user_id=htmlspecialchars($user_id);
    }
    public function getUser_id() {
        return $this->user_id;
    }
    public function __construct($data) {
        $this->hydrate($data);
    }
}