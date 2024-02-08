<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../asset/css/user.css">
    <link rel="icon" type="image/png" href="../../asset/img/png/logo/logoSbS.png" />
    <title>SignUp</title>
</head>
<body>
    <div class="loginForm">
        <h2>Stock By Stock</h2>
        <form action="../../model/user/login.php" method="post">
            <label for="username">Nom d'utilisateur : </label>
            <input type="text" name="username" id="username" placeholder="Entrer votre nom d'utilisateur : ...">
            <label for="password">Mot de passe : </label>
            <input type="password" name="pass" id="pass" placeholder="Password ...">
            <input type="submit" value="Connection">
            <a href="./signupView.php">Créer un compte</a>
        </form>
    </div>
</body>
</html>