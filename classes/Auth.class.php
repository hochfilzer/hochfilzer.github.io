<?php

class Auth{

    private $db;

    function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);
        } catch (PDOException $e){
            echo "Verbindung fehlgeschlagen!";
            die();
        }
    }

    function login($u,$p)
    {

        $stmt = $this->db->prepare("SELECT * FROM userdb where user = :user");
        $stmt->bindValue(":user", $u);
        $stmt->execute();
        $usr = $stmt->fetch();

        if ($usr !== false && password_verify($p, $usr['password'])) {
            return true;
        } else {
            return false;
        }

    }
}

?>