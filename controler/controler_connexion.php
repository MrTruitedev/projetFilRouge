<?php
    //*import
    include './utils/connect_bdd.php';
    include './model/model_user.php';
    include './view/view_connexion.php';

    $msg = '';
    $check = 'false';

    //Test logique
    if(isset($_GET['deco'])){
        $msg = 'Déconnecté';
    }
    //Test clic Connexion
    if(isset($_POST['connexion'])){
        //Test formulaire rempli
        if(!empty($_POST['mail_util']) AND !empty($_POST['mdp_util'])){
            //Instance d'un nouvel objet Utilisateur
            $util = new Utilisateur(null, null,$_POST['mail_util'], null, $_POST['mdp_util'], null);
        }
        //Création d'un tableau utilisateur
        $test = $util ->getUserByMail($bdd);
        //Test si utilisateur existe en bdd
        if(!empty($test)){
            //Récupération du hash
            $hash = $test[0]['mdp_util'];
            // Verification mdp
            $password = password_verify($_POST['mdp_util'], $hash);
            if($password){
                //Creation des super globales session
                $_SESSION['connected'] = true;
                $_SESSION['id'] = $test[0]['id_util'];
                $_SESSION['name'] = $test[0]['nom_util'];
                $_SESSION['mail'] = $test[0]['mail_util'];
                $_SESSION['fam'] = $test[0]['id_fam_util'];
                //Test famille d'utilisateur
                if($_SESSION['fam'] == 1){
                    //Message connecté 
                    $msg = 'Connecté en tant qu\'artiste';
                    
                    // echo "<script>
                    // setTimeout(()=>{
                    //     document.location.href='/projet/accueil'; 
                    //     }, 1500);
                    // </script>";
                    // echo "<script>zoneMsg.innerHTML = '$msg'</script>";
                }else{
                    $msg = 'Connecté en tant qu\'organisateur';
                    
                    // echo "<script>
                    // setTimeout(()=>{
                    //     document.location.href='/projet/accueil'; 
                    //     }, 1500);
                    // </script>";
                    // echo "<script>zoneMsg.innerHTML = '$msg'</script>";
                }
            }else{
                $msg = 'Les informations sont incorrectes';
            }
        }
    }else{
        $msg = 'Cliquez sur connexion';
    }
    echo "<script>zoneMsg.innerHTML = '$msg'</script>";
?>