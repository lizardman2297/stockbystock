
<?php

function databaseConnect() {
    $user = "root";
    $pass = "";
    $db = new PDO('mysql:host=localhost;dbname=stockbystock', $user, $pass);
    return $db;
}
?>
