<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../asset/css/user.css">
    <link rel="icon" type="image/png" href="../../asset/img/png/logo/logoSbS.png" />
    <title>login</title>
</head>
<body>
    <div class="loginForm">
        <h2>Stock By Stock</h2>
        <form action="../../model/user/signUp.php" method="post">
            
            <label for="name">Nom : </label>
            <input type="text" name="name" id="name" placeholder="Entrer votre nom : ...">
            
            <label for="prenom">Prenom : </label>
            <input type="text" name="prenom" id="prenom" placeholder="Entrer votre Prenom : ...">
            
            <label for="mail">Mail : </label>
            <input type="text" name="mail" id="mail" placeholder="Entrer votre Mail : ...">

            <label for="password">Mot de passe : </label>
            <input type="password" name="pass" id="pass" placeholder="Password ...">
            <label for="password">Mot de passe : </label>
            <input type="password" name="passVerif" id="passVerif" placeholder="Password ...">

            <input type="submit" value="Créer mon compte">
            <a href="./signupView.php">Connection</a>
        </form>
    </div>
</body>
</html>