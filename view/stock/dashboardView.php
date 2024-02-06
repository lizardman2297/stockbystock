<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <title>Stock actuel</title>
</head>
<body>
   <nav>
        <?php 
            require_once("view/include/TopBar.php");
        ?>
    </nav>

    <aside>
        <?php 
            require_once("view/include/leftMenu.php");
        ?>
    </aside>

    <section>
        <div class="title">
            <h2>Stock</h2>
        </div>

        <div class="content">
            <div class="displayStock">
                <table>
                    <thead>
                        <tr>
                            <td></td>
                            <td>reference fournisseur</td>
                            <td>reference interne</td>
                            <td class="libelle">libelle</td>
                            <td>Prix HT</td>
                            <td>quantite</td>
                            <td>Min</td>
                            <td>Max</td>
                            <td>actions rapide</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            for ($i=0; $i < count($produits); $i++) { 
                                ?>
<!-- loop -->
                        <tr class="element">
                            <td id="picture"><img src="https://picsum.photos/50/50" alt="produit"></td>
                            <td id="refFournisseur"><?php echo ($produits[$i]->refFournisseur != "") ?  $produits[$i]->refFournisseur : "<i class='fa-regular fa-circle-xmark'></i>" ?></td>
                            <td id="refInterne"><?php echo ($produits[$i]->refInterne != "") ?  $produits[$i]->refInterne : "<i class='fa-regular fa-circle-xmark'></i>" ?></td>
                            <td id="libelle" class="libelle"><?php echo ($produits[$i]->libelle != "") ?  $produits[$i]->libelle : "<i class='fa-regular fa-circle-xmark'></i>" ?></td>
                            <td id="prixHT"><?php echo ($produits[$i]->prixHT != "") ?  $produits[$i]->prixHT : "<i class='fa-regular fa-circle-xmark'></i>" ?></td>
                            <td id="quantite"><?php echo ($produits[$i]->quantite != "") ?  $produits[$i]->quantite : "<i class='fa-regular fa-circle-xmark'></i>" ?></td>
                            <td id="quantiteMin"><?php echo ($produits[$i]->quantiteMin != "") ?  $produits[$i]->quantiteMin : "<i class='fa-regular fa-circle-xmark'></i>" ?></td>
                            <td id="quantiteMax"><?php echo ($produits[$i]->quantiteMax != "") ?  $produits[$i]->quantiteMax : "<i class='fa-regular fa-circle-xmark'></i>" ?></td>
                            <td id="actionRapide"> <a href="index.php?categorie=stock&action=viewProduit&id=<?php echo $produits[$i]->id; ?>" ><i class="fa-regular fa-eye openElement "></i></a>
                                                   <a href="index.php?categorie=stock&action=increaseProduit&id=<?php echo $produits[$i]->id; ?>" ><i class="fa-regular fa-circle-up increaseElement"></i></a>  
                                                   <a href="index.php?categorie=stock&action=decreaseProduit&id=<?php echo $produits[$i]->id; ?>" ><i class="fa-regular fa-circle-down decreaseElement"></i>
                                                   <a href="index.php?categorie=stock&action=editProduit&id=<?php echo $produits[$i]->id; ?>" ><i class="fa-solid fa-pen editElement"></i></a>
                                                   <a href="index.php?categorie=stock&action=deleteProduit&id=<?php echo $produits[$i]->id; ?>" ><i class="fa-regular fa-circle-xmark delElement"></i></i></a>
                            </td>
                        </tr>
                                <?php
                            }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </section>
</body>
</html>