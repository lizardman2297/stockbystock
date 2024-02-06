<?php

require_once("../database.php");
$db = databaseConnect();

// var_dump($_FILES);

$test = fgetcsv(fopen($_FILES["fileUpload"]["tmp_name"], "r"), 1000, ",");

$row = 0;
if (($handle = fopen($_FILES["fileUpload"]["tmp_name"], "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        var_dump($data);

        $fNom = $data[8];
        $fNom = str_replace(";", "", $fNom);
        

        $req = "INSERT INTO produit (libelle, prixHT, quantite, fournisseur) VALUES ('$data[0]', $data[3], $data[7], (SELECT f.id FROM fournisseur f WHERE nom = '$fNom'))";
        var_dump($req);
        // echo "<p> $num fields in line $row: <br /></p>\n";
        // echo "- libelle : " . $data[1] . "</br> \n"; 
        // echo "- desc : " . $data[3] . "</br> \n";
        // echo "- fournisseur : " . $data[12] . "</br> \n"; 
        // echo "- categorie : " . $data[25] . "</br> \n"; 
        // echo "- tags : " . $data[26] . "</br> \n"; 
        // echo "- dimwidth : " . $data[15] . "</br> \n"; 

        
        // $req = "INSERT INTO produit(refInterne, libelle, quantite) VALUES ('$data[2]', '$data[3]', $data[6])";
        $pdo = $db->prepare($req);
        var_dump($pdo);
        

        // $req = "INSERT INTO produit (description, fournisseur, entite) VALUES ('$data[3]', (SELECT id FROM fournisseur WHERE nom = '$data[12]'), $data[25]) WHERE libelle = $data[1]
        
        
        
        
        $pdo->execute();

        

        $row++;
    }
}