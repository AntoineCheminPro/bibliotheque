<?php
require_once "model/dataBase.php";
require_once "model/entity/user.php";

final class UserManager extends dataBase {

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
    $query = $this->getDB()->prepare(
      "SELECT *
      FROM user
      WHERE id = :user_id"
      );
      $query->execute([
        "user_id" => $user_id
      ]);
      $user =$query -> fetchAll(PDO::FETCH_ASSOC);
      $user = new User($user[0]);
      
      return $user;
  }

  // Ajoute un nouvel utislisateur
  public function addUser(User $user):bool {
    $query = $this->getDB()->prepare(
      "INSERT INTO user(sex, firstname, lastname, birth_date, adress, city_code, city, email, phone)
        VALUES(:sex, :firstname, :lastname, :birth_date, :adress, :city_code, :city, :email, :phone)
      ");
    $result= $query->execute([
      "sex" => $user->getSex(),
      "firstname" => $user->getFirstname(),
      "lastname" => $user->getLastname(),
      "birth_date" => $user->getBirth_date(),
      "adress" => $user->getAdress(),
      "city_code" => $user->getCity_code(),
      "city" => $user->getCity(),
      "email" => $user->getEmail(),
      "phone" => $user->getPhone()
    ]);
      return $result;
  }
    
}
