<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

class dataBase
{
    const HOST  = "localhost";
    const NAME = "Bibliotheque_PHP";
    const LOGIN = "BibliothequePHP";
    const PASSWORD = "bibli";
    private PDO $_db;

    public function setDB(PDO $connect){
        $this->_db =$connect;
    }
    public function getDB():PDO{
        return $this->_db;
    }
    
    static public function DB() {
        try{
          $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::NAME , self::LOGIN, self::PASSWORD);
        } 
        catch (PDOException $e){
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
        }
        return $db;
    }

    function __construct()
    {
        $this->setDB(self::DB());
    }
    
}
