<?php

function loadAllFournisseur() {
    include_once("model/database.php");
    $db = databaseConnect();
    
    $req = "SELECT * FROM fournisseur";
    $pdo = $db->query($req);
    
    $i = 0;
    
    while ($element = $pdo->fetchObject()) {
        $listFournisseur[$i] = $element;
        $i += 1;
    }
}

function loadFournisseurFromName($name) {
    include_once("model/database.php");
    $db = databaseConnect();
    
    $req = "SELECT * FROM fournisseur WHERE nom = '$name'"; 
    return $db->query($req)->fetchObject();
}

function loadFournisseurFromId($id) {
    include_once("model/database.php");
    $db = databaseConnect();
    
    $req = "SELECT * FROM fournisseur WHERE id = $id";
    return $db->query($req)->fetchObject();
}