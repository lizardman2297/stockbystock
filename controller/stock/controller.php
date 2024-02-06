<?php
    function loadStockDashboardRender() {
        include_once("model/database.php");
        include_once("model/stock/model.php");


        $produits = loadProduiForListModel(0,0,0);
        include_once("view/stock/dashboardView.php");
    }

    function loadProduitView($idProduit) {
        include_once("model/database.php");
        include_once("model/stock/model.php");
        $produit = loadProduitFromId($idProduit);
        include_once("view/stock/produitView.php");
    }

    function loadImportDataView() {
        include_once("model/database.php");
        $db = databaseConnect();
        include_once("view/stock/importDataView.php");
    }
    
    function loadInterView() {
        include_once("model/database.php");
        include_once("model/stock/model.php");
        $db = databaseConnect();
        $inters = getAllInterPDC();
        include_once("view/stock/interView.php");
    }
    
    function loadInterDecrease($id) {
        include_once("model/database.php");
        include_once("model/stock/model.php");
        $db = databaseConnect();
        setInterById($id, -1);
        include_once("view/stock/interView.php");
    }

?>