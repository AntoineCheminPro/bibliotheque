<?php
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


    private function setFirstname(string $firstname) {
        $this->firstname=htmlspecialchars($firstname);
    }
    public function getFirstname() {
        return $this->firstname;
    }

    private function setLastname(string $lastname) {
        $this->lastname= htmlspecialchars($lastname);
    }
    public function getLastname() {
        return $this->lastname;
    }

    private function setAdress(string $adress) {
        $this->adress=htmlspecialchars($adress);
    }
    public function getAdress() {
        return $this->adress;
    }

    private function setCityCode(int $city_code) {
        $this->city_code =htmlspecialchars($city_code);
    }
    public function getCityCode() {
        return $this->city_code;
    }

    private function setCity(string $city) {
        $this->city=htmlspecialchars($city);
    }
    public function getCity() {
        return $this->city;
    }

    private function setPhone(string $phone) {
        $this->phone=htmlspecialchars($phone);
    }
    public function getPhone() {
        return $this->city;
    }

    private function setEmail(string $email) {
        $this->email=$email;
    }
    public function getEmail() {
        return $this->email;
    }

    private function setSex(string  $sex) {
        $this->sex=htmlspecialchars($sex);
    }
    public function getSex() {
        return $this->sex;
    }

    private function setBirthDate(string $birth_date) {
        $this->birth_date=$birth_date;
    }
    public function getBirthDate() {
        return $this->birth_date;
    }

}
