<?php
session_start();

require_once ("./config.inc.php");

try {
    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);
} catch (PDOException $e){
    echo "Verbindung fehlgeschlagen!";
    die();
}

if(isset($_POST["invert"])){
    $_SESSION["darkmode"] = !$_SESSION["darkmode"];
}

if(isset($_POST['addEvent'])){
    $Titel = $_POST['titel'];
    $Beschreibung = $_POST['beschreibung'];
    $donedate = $_POST['doneDate'];

    if($Titel != null && $Beschreibung != null && $donedate != null) {
        $stmt = $db->prepare("INSERT INTO BlogEntries(title, description, date) VALUES (:title, :description, :date)");
        $stmt->bindValue(":title", strip_tags($Titel));
        $stmt->bindValue(":description",  strip_tags($Beschreibung));
        $stmt->bindValue(":date", $donedate);
        $stmt->execute();
    }

    if($Titel != null && $Beschreibung == null && $donedate != null) {
        $stmt = $db->prepare("INSERT INTO BlogEntries(title, description, date) VALUES (:title, :description, :date)");
        $stmt->bindValue(":title", strip_tags($Titel));
        $stmt->bindValue(":description", null);
        $stmt->bindValue(":date", $donedate);
        $stmt->execute();
    }

    if($Titel != null && $Beschreibung != null && $donedate == null) {
        $stmt = $db->prepare("INSERT INTO BlogEntries(title, description, date) VALUES (:title, :description, :date)");
        $stmt->bindValue(":title", strip_tags($Titel));
        $stmt->bindValue(":description", strip_tags($Beschreibung));
        $stmt->bindValue(":date", null);
        $stmt->execute();
    }

    if($Titel != null && $Beschreibung == null && $donedate == null) {
        $stmt = $db->prepare("INSERT INTO BlogEntries(title, description, date) VALUES (:title, :description, :date)");
        $stmt->bindValue(":title", strip_tags($Titel));
        $stmt->bindValue(":description", null);
        $stmt->bindValue(":date", null);
        $stmt->execute();
    }

    if( isset($_FILES['fileWithEntry']['name2'])) {
        $newdir = $_POST['titel'];
        if(is_dir($newdir)==false){
            mkdir("Pictures/".$newdir,0777);
        }
        $target_dir = 'Pictures/'.$newdir."/";
        $total_files = count($_FILES['fileWithEntry']['name2']);

        for($key = 0; $key < $total_files; $key++) {
            if(isset($_FILES['fileWithEntry']['name2'][$key])
                && $_FILES['fileWithEntry']['size'][$key] > 0) {

                $original_filename = $_FILES['fileWithEntry']['name2'][$key];
                $target = $target_dir . basename($original_filename);
                $tmp  = $_FILES['fileWithEntry']['tmp_name'][$key];
                move_uploaded_file($tmp, $target);
            }
        }

    }
    header("Location: BlogEditor.php");
}
