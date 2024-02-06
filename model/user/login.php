<?php

if (!isset($_POST)) {
    var_dump($_POST);
} else  {
    session_start();
    $_SESSION["username"] = "Loris";
    header("location: ../../index.php");
}