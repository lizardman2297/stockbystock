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
        <div class="title">
            <h2>Import data</h2>
        </div>

        <div class="content">
            <form action="model/stock/import.php" enctype="multipart/form-data" method="post">
                <label for="fileUpload">Fichier : </label>
                <input type="file" name="fileUpload" id="fileUpload">
                <label for="test">tets</label>
                <input type="text" name="test" id="test">

                <input type="submit" value="importer">
            </form>
        </div>
    </section>
</body>
</html>