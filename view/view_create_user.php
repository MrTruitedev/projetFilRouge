<h2>Inscription : </h2>
    <div class="form-container">
        <form action="" method="post">
            <label for="nom_util">Nom :</label>
            <p><input type="text" name="nom_util" class="form-input"></p>
            <label for="prenom_util">Prénom :</label>
            <p><input type="text" name="prenom_util" class="form-input"></p>
            <label for="mail_util">Mail :</label>
            <p><input type="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
            name="email" class="form-input" required></p>
            <label for="tel_util">Téléphone :</label>
            <p><input type="tel" name="tel_util" class="form-input"></p>
            <label for="mdp_util">Mot de passe :</label>
            <p><input type="password" name="mdp_util" class="form-input" required></p>
            <label for="artiste">Artiste :</label>
            <input type="radio" name="fam" id="artiste" value="1" checked>
            <label for="orga">Organisateur :</label>
            <input type="radio" name="fam" id="orga" value="2">
            <p><input type="submit" value="Ajouter" name="addUser" class="form-button"></p>
        </form>
        <div id="msg"><p></p></div>
    </div>
    <script src="./asset/script/script.js"></script>
