<?php
// Classe représetant les livres stockés en base de données
abstract class Entity {
function setId(){

}
function getId(){

}

public function __construct($data) {
    $this->hydrate($data);
}
private function hydrate(array $data) {
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)) {
        $this->$method(htmlspecialchars($value));
      }
    }
}
}
