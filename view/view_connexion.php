<h2 class="h2-form">Connexion</h2>
    <div class="form-container">
        <form action="" method="post">
            <p><label for="mail_util">Mail :</label></p>
            <p><input type="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-input" required></p>
            <p><label for="mdp_util">Mot de passe :</label></p>
            <p><input type="password" name="mdp_util" class="form-input" required></p>
            <p><input type="submit" value="Connexion" name="connexion" class="form-button"></p>
        </form>
        <div id="msg"><p></p></div>
    </div>
<script src="./asset/script/script.js"></script>
