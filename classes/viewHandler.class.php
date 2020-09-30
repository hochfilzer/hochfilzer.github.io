<?php
class viewHandler
{
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

    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM BlogEntries WHERE id=:id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
    }

    public function getAll(){
        $stmt = $this->db->prepare("SELECT * FROM BlogEntries ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getTitles(){
        $stmt = $this->db->prepare("SELECT title, id FROM BlogEntries ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}