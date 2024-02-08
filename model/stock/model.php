<?php

    function loadProduiForListModel($start, $end, $step) {
        include_once("model/database.php");
        $db = databaseConnect();

        $req = ("SELECT p.id, p.refFournisseur, p.refInterne, p.visuel, p.libelle, p.prixHT, p.quantiteMin, p.quantiteMax, p.quantite FROM produit p");
        $list = $db->query($req);
        $i = 0;

        while ($produit = $list->fetchObject()) {
            $listproduit[$i] = $produit;
            $i += 1;
        }
        return $listproduit;
    }

    function loadProduitFromId($id) {
        include_once("model/database.php");
        $db = databaseConnect();
        $reqFournisseur = "SELECT fournisseur FROM produit WHERE id = $id";

        // var_dump($db->query($reqFournisseur)->fetchObject());

        if ($db->query($reqFournisseur)->fetchObject()->fournisseur == null) {
            $req = ("SELECT p.id, p.refFournisseur, p.refInterne, p.visuel, p.libelle, p.prixHT, p.quantiteMin, p.quantiteMax, p.quantite
                     FROM produit p
                     WHERE p.id = $id");
        } else {
            $req = ("SELECT p.id, p.refFournisseur, p.refInterne, p.visuel, p.libelle, p.prixHT, p.quantiteMin, p.quantiteMax, p.quantite, f.nom AS 'fNom'
                    FROM produit p, fournisseur f
                    WHERE p.fournisseur = f.id
                    AND p.id = $id");
        }
        $produit = $db->query($req)->fetchObject();
        return $produit;
    }
    
    function getAllProduitLibelle() {
        include_once ("model/database.php");
        $db = databaseConnect();
        
        $req = "SELECT libelle FROM produit";
        $list = $db->query($req);
        $i = 0;
        
        while ($libelle = $list->fetchObject()) {
            $listLibelle[$i] = $libelle->libelle;
            $i += 1;
        }

        if(!isset($listLibelle)) {
            $listLibelle = NULL;
        }
        
        return $listLibelle;
    }
    
    function getAllProduitRefInterne() {
        include_once ("model/database.php");
        $db = databaseConnect();
        
        $req = "SELECT refInterne FROM produit";
        $list = $db->query($req);
        $i = 0;
        
        while ($ref = $list->fetchObject()) {
            $listRef[$i] = $ref->refInterne;
            $i += 1;
        }
        
        return $listRef;
    }    
    
    function getAllProduitRefFornisseur() {
        include_once ("model/database.php");
        $db = databaseConnect();
        
        $req = "SELECT refFournisseur FROM produit";
        $list = $db->query($req);
        $i = 0;
        
        while ($refFournisseur = $list->fetchObject()) {
            $listRef[$i] = $refFournisseur->refFournisseur;
            $i += 1;
        }
        
        return $listRef;
    }
    
    function getAllInterPDC() {
        include_once ("model/database.php");
        $db = databaseConnect();
        
        $req = "SELECT * FROM produit WHERE libelle LIKE 'Inters%'";
        $list = $db->query($req);
        $i = 0;
        
        while ($inter = $list->fetchObject()) {
            $listInters[$i]["id"] = $inter->id;
            $listInters[$i]["libelle"] = $inter->libelle;
            $listInters[$i]["quantite"] = $inter->quantite;
            $i += 1;
        }
        
        return $listInters;
    }
    
    function getQuantiteById($id) {
        include_once ("model/database.php");
        $db = databaseConnect();
        
        $req = "SELECT quantite FROM produit WHERE id = $id";
        $pdo = $db->query($req);
        $quantite = $pdo->fetchObject()->quantite;
        return $quantite;
    }
    
    function setInterById($id, $quantite) {
        include_once ("model/database.php");
        $db = databaseConnect();
        
        $stock = intval(getQuantiteById($id));
        $stock -= 1;
        
        $req = "UPDATE produit SET quantite = $stock WHERE id = $id";
        $db->query($req);
        
        header("location: index.php?categorie=stock&action=inter");
        
    }
    
?>