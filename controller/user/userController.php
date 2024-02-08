<?php

    function login ($etat = "true") {
        session_start();
        session_destroy();
        header("location: ./view/user/loginView.php?etat=$etat");
    }

    function logout() {
        session_start();
        session_destroy();
        header("location: index.php");
    }

?>