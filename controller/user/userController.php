<?php

    function login () {
        session_start();
        session_destroy();
        header("location: ./view/user/loginView.php");
    }

    function logout() {
        session_start();
        session_destroy();
        header("location: index.php");
    }

?>