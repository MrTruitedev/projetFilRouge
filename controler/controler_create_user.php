<?php
    // Imports
    include './utils/connect_bdd.php';
    include './model/model_user.php';
    include './model/model_artiste.php';
    include './view/view_create_user.php';
    // Test logiques
    // Test clic bouton Ajouter
    $msg = '';
    if(isset($_POST['addUser'])){
        // Test remplissage formulaire
        if(isset($_POST['nom_util']) AND isset($_POST['prenom_util']) AND
        isset($_POST['mail_util']) AND isset($_POST['tel_util'])
        AND isset($_POST['mdp_util']) AND isset($_POST['fam']) AND 
        !empty($_POST['nom_util']) AND !empty($_POST['prenom_util']) AND
        !empty($_POST['mail_util']) AND !empty($_POST['tel_util']) AND
        !empty($_POST['mdp_util'])){
            if($_POST['fam'] == 1){
                // Instance d'un nouvel objet
                $util = new Utilisateur($_POST['nom_util'], $_POST['prenom_util'],
                $_POST['mail_util'], $_POST['tel_util'], $_POST['mdp_util'],
                $_POST['fam']);
                $util->setIdFamUtil(1);
            }else{
                $util = new Utilisateur($_POST['nom_util'], $_POST['prenom_util'],
                $_POST['mail_util'], $_POST['tel_util'], $_POST['mdp_util'],
                $_POST['fam']);
                $util->setIdFamUtil(2);
            }
            var_dump($util);
            // Hashage du mdp
            $util -> setMdpUtil(password_hash($util->getMdpUtil(), PASSWORD_DEFAULT));
            // Appel de la methode getUserByMail()
            $mail = $util ->getUserByMail($bdd);
            if(empty($mail)){
                $util->createUser($bdd);
                $msg = 'L\'utilisateur '.$_POST['nom_util'].' à été ajouté en bdd.';
            }else{
                $msg = "Informations incorrectes";
            }
        }else{
            $msg = 'Veuillez remplir le formulaire'; 
        }
    }else{
        $msg = 'Veuillez cliquer sur Ajouter';
    }
    echo "<script>zoneMsg.innerHTML = '$msg'</script>";
?>