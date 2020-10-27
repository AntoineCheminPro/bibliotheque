<?php
require_once "model/dataBase.php";
require_once "model/entity/user.php";
final class userManager extends dataBase {

  // Récupère tous les utilisateurs
  public function getUsers():array {
    $query = $this->getDB()->prepare(
    "SELECT *
    FROM user"
    );
    $query->execute();
    $users =$query -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $key => $user) {
      $users[$key] = new User($user);
    }
    return $users;
  }

  // Récupère un utilisateur par son id
  public function getUserById($user_id):User {

  }

  
}
