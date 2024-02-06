<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="asset/css/main.css">
<link rel="stylesheet" href="vendor/fontawesome/css/all.css">
<title>Inter</title>
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
            <h4 class="title">Inters PDC</h4>
        </div>

        <div class="content">

            <div class="displayStock">
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Libelle</td>
                            <td>Quantité</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        foreach ($inters as $element) {
                            $libelle = substr($element["libelle"], strpos($element["libelle"], "–") + 4);
                        ?>
<!-- loop -->
                        <tr class="element">
                            <td><?php echo $element["id"] ?></td>
                            <td><?php echo $libelle ?></td>
                            <td><?php echo $element["quantite"] ?></td>
                            <td>
                            <?php 
                                if ($element["quantite"] == "0") {
                            ?>
                            	<i class="fa-regular fa-circle-down delElement"></i>                            	
                            <?php 
                                } else {
                            ?>
                                	<a href="index.php?categorie=stock&action=decreaseInter&id=<?php echo $element["id"]; ?>" >
                            		<i class="fa-regular fa-circle-down decreaseElement"></i>
                        		</a>
                            <?php 
                                }
                            ?>
                            <a onClick="update()"><i class="fa-solid fa-pen-to-square editElement"></i></a>
                    		</td>
                        </tr>
                                <?php
                            }
                        ?>
                    </tbody>

                </table>
            
            
            
            
            
            
        </div>

    </section>
</body>
<script src="asset/js/inter.js"></script>
</html>