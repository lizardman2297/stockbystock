<?php
    function loadDashboardRender() {
        include_once("model/database.php");
        include_once("model/stock/model.php");
        
        $test = getAllProduitLibelle();
        
        include_once("view/dashboard/layout.php");
    }
?>