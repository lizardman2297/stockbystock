<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <title>Document</title>
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
        <?php 
        ?>
        <div class="title">
            <h2><?php echo $produit->libelle; ?></h2>
            <?php
                var_dump($produit);
                if ($produit->refInterne == ("")) {
                    $refInterne = "";
                }else {
                    $refInterne = $produit->refInterne;
                }

                if ($produit->refFournisseur == ("")) {
                    $refFournisseur = "";
                }else {
                    $refFournisseur = $produit->refFournisseur;
                }

            ?>
            <h4><?php echo $refInterne . " - "  ?>  <?php echo $refFournisseur ; ?></h4>
        </div>

        <div class="content">
            
        </div>

    </section>
</body>
</html>