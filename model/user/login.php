<?php

require_once("../database.php");
$db = databaseConnect();

var_dump($_POST);

$nom = $_POST["username"];
$pass = $_POST["pass"];

// $hash = $passwordHash;



$reqHash = "SELECT * FROM utilisateur WHERE nom = '$nom'";

$pdo = $db->query($reqHash)->fetchObject();

var_dump($pdo);

$passwordHash = $pdo->password;

if(password_verify($pass, $passwordHash)) {
    session_start();

    $_SESSION["nom"] = $pdo->nom;
    $_SESSION["prenom"] = $pdo->prenom;
    $_SESSION["mail"] = $pdo->mail;
    $_SESSION["creationDate"] = $pdo->creationDate;
    $_SESSION["role"] = $pdo->role;

    header("location: ../../index.php");
} else {
    header("location: ../../index.php?connectStatut=badPass");
}