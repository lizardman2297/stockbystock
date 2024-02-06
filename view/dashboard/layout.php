<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <title>Dashboard</title>
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
            <h2>Dashboard</h2>
        </div>

        <div class="content">
            <div id="top">
                <div id="left">
                    <h3 class="subtitle">Commandes en attentes</h3>
                    <div class="leftContent">
                        Commande en attentes : 3
                    </div>
                </div>
                <div id="center">
                    <h3 class="subtitle">Stock courant</h3>
                    <div class="leftContent">
                        Nonbre de ref : 1255
                        <br>
                        Nonbre d'équipements : 10

                    </div>
                </div>
                <div id="right">
                    right
                </div>
            </div>
          	<div class="center">
          		
          	</div>
        </div>
    </section>
</body>
<script>var libelle = <?php echo json_encode($test)?></script>
<<script src="asset/js/search.js"></script>
</html>