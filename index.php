<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="asset/img/png/logo/logoSbS.png" />
    <title>Stock By Stock</title>
</head>
<body>
    
</body>
</html>

<?php
    //router
    //copy

    session_start();

    if (!isset($_SESSION['username'])) {
        header("location: index.php?user=login");
    } else {
        $username = $_SESSION["username"];
    }
    
    include_once("controller/user/userController.php");    
    include_once("controller/controller.php");    
    include_once("controller/dashboard/controller.php");    
    include_once("controller/stock/controller.php");    
    include_once("controller/user/userController.php");    
    
    if(empty($_GET)) {
        // load dashboard layout
        loadDashboardRender();
        
    } else {
        if ($_GET["categorie"] == "stock") {
            if(empty($_GET["action"])) {
                loadStockDashboardRender();
            } else if($_GET["action"] == "viewProduit") {
                loadProduitView($_GET["id"]);
            } else if($_GET["action"] == "editProduit") {
                loadProduitView($_GET["id"]);
            } else if($_GET["action"] == "increaseProduit") {
                loadProduitView($_GET["id"]);
            } else if($_GET["action"] == "decreaseProduit") {
                loadProduitView($_GET["id"]);
            } else if($_GET["action"] == "deleteProduit") {
                loadProduitView($_GET["id"]);
            } else if($_GET["action"] == "importData") {
                loadImportDataView();
            }
        } else if (isset($_GET["user"])) {
            if ($_GET["user"] == "logout") {
                logout();
            } else if ($_GET["user"] == "login") {
                login();
            } 
        } else{
            loadDashboardRender();
        }
    }