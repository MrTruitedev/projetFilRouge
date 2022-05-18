<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <h3>Ajouter un utilisateur:</h3>
    <form action="" method="post">
        <label for="nom_util">Nom</label>
        <p><input type="text" name="nom_util"></p>
        <label for="prenom_util">Prenom</label>
        <p><input type="text" name="prenom_util"></p>
        <label for="mail_util">Mail</label>
        <p><input type="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
        name="email" required></p>
        <label for="tel_util">Téléphone</label>
        <p><input type="tel" name="tel_util"></p>
        <label for="mdp_util">Mot de passe</label>
        <p><input type="password" name="mdp_util" required></p>
        <label for="fam1">Artiste</label>
        <input type="radio" name="fam" id="artiste" value="1" checked>
        <label for="fam2">Organisateur</label>
        <input type="radio" name="fam" id="orga" value="2">
        <p><input type="submit" value="Ajouter" name="addUser"></p>
    </form>
</body>
</html>