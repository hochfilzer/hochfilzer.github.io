<?php
require_once("config.inc.php");
session_start();

$v = new viewHandler();


if(isset($_POST['refresh'])){
    $liste = $v->getAll();
    header("Content-Type: application/json");
    echo json_encode($liste);
}

if(isset($_POST['delete'])){
    $v->delete($_POST['delete']);
}

if(isset($_POST['showEntries'])){
    $liste = $v->getTitles();
    header("Content-Type: application/json");
    echo json_encode($liste);
}