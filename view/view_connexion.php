<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <form action="" method="post">
        <p><label for="mail_util">Mail :</label></p>
        <p><input type="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required></p>
        <p><label for="mdp_util">Mot de passe :</label></p>
        <p><input type="password" name="mdp_util" required></p>
        <p><input type="submit" value="Connexion" name="connexion"></p>
    </form>
    <p id="#msg"></p>
    <script src="./asset/script/script.js"></script>
</body>
</html>