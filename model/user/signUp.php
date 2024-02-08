<?php

var_dump($_POST);

require_once("../../model/database.php");
$db = databaseConnect();

date_default_timezone_set('UTC');

$nom = $_POST['name'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
$creationDate = date("Y-m-d");
$role = 1;

$req = "INSERT INTO utilisateur (prenom, nom, mail, password, dateCreation, role) VALUES ('$nom', '$prenom', '$mail', '$password', '$creationDate', $role)";

$pdo = $db->query($req);

var_dump($req);
var_dump($pdo);

session_start();

$_SESSION["nom"] = $nom;
$_SESSION["prenom"] = $prenom;
$_SESSION["mail"] = $mail;
$_SESSION["creationDate"] = $creationDate;
$_SESSION["role"] = $role;

header("location: ../../index.php");