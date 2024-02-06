
<?php

function databaseConnect() {
    $user = "root";
    $pass = "";
    $db = new PDO('mysql:host=localhost;dbname=stockis', $user, $pass);
    return $db;
}
?>
