<?php
// Classe représetant les livres stockés en base de données
final class Book extends Entity {

    protected string $title;
    protected string $author;
    protected string $summary;
    protected string $category;
    protected string $publication_date;
    protected int $user_id;


    private function setTitle(string $title) {
        $this->title=htmlspecialchars($title);
    }
    public function getTitle() {
        return $this->title;
    }

    private function setAuthor(string $author) {
        $this->author=htmlspecialchars($author);
    }
    public function getAuthor() {
        return $this->author;
    }

    private function setSummary(string $summary) {
        $this->summary=htmlspecialchars($summary);
    }
    public function getSummary() {
        return $this->summary;
        
    }
    private function setCategory(string $category) {
        $this->category=htmlspecialchars($category);
    }
    public function getCategory() {
        return $this->category;
        
    }
    private function setPublication_date(string $publication_date) {
        $this->publication_date=htmlspecialchars($publication_date);
    }
    public function getPublication_date() {
        return $this->publication_date;
        
    }
    private function setUser_id(string $user_id) {
        $this->user_id=htmlspecialchars($user_id);
    }
    public function getUser_id() {
        return $this->user_id;
    }
