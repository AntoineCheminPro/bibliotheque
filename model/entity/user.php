<?php
require_once "model/entity/Entity.php";
// Classe représetant les utilisateurs stockés en base de données
final class User extends Entity{

    protected string $firstname;
    protected string $lastname;
    protected string $adress;
    protected int $city_code;
    protected string $city;
    protected string $phone;
    protected string $email;
    protected string $sex;
    protected string $birth_date;

    

    public function setFirstname(string $firstname) {
        $this->firstname=htmlspecialchars($firstname);
    }
    public function getFirstname() {
        return $this->firstname;
    }

    public function setLastname(string $lastname) {
        $this->lastname= htmlspecialchars($lastname);
    }
    public function getLastname() {
        return $this->lastname;
    }

    public function setAdress(string $adress) {
        $this->adress=htmlspecialchars($adress);
    }
    public function getAdress() {
        return $this->adress;
    }

    public function setCity_code(int $city_code) {
        $this->city_code =htmlspecialchars($city_code);
    }
    public function getCity_code() {
        return $this->city_code;
    }

    public function setCity(string $city) {
        $this->city=htmlspecialchars($city);
    }
    public function getCity() {
        return $this->city;
    }

    public function setPhone(string $phone) {
        $this->phone=htmlspecialchars($phone);
    }
    public function getPhone() {
        return $this->phone;
    }

    public function setEmail(string $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email=$email;
            return $this;
        }
        throw new Exception("Format d'email incorrect");
    }
    public function getEmail() {
        return $this->email;
    }

    public function setSex(string  $sex) {
        $this->sex=htmlspecialchars($sex);
    }
    public function getSex() {
        return $this->sex;
    }

    public function setBirth_date(string $birth_date) {
        $this->birth_date=$birth_date;
    }
    public function getBirth_date() {
        return $this->birth_date;
    }

    public function __construct($data) {
        $this->hydrate($data);
    }
}
