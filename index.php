<?php
    //*session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //menu 
    include './view/view_menu.php';
    // if(isset($_SESSION['connected']) == true){
    //    include './view/view_menu.php';
    // }else{
    //     include './view/view_menu_deco.php';
    // }
    /*--------------------------ROUTER -----------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        //route /projet/create_user -> ./controler/controler_create_user.php
        case $path === "/projet/create_user" : 
            include './controler/controler_create_user.php';
            break ;
        //route /projet/connexion-> ./controler/controler_connexion.php
        case $path === "/projet/connexion":
            include './controler/controler_connexion.php';
		    break ;
        //route /projet/accueil -> ./controler/controler_accueil.php
        case $path === "/projet/accueil":
            include './controler/controler_accueil.php';
		    break ;
        //route /projet/modifyArticle -> ./controler/controler_modify_article.php
        case $path === "/projet/modifyArticle":
            include './controler/controler_modify_article.php';
		    break ;
        //route /projet/deleteArticle -> ./controler/controler_delete_article.php
        case $path === "/projet/deleteArticle":
            include './controler/controler_delete_article.php';
		    break ;
        
        //route /projet/addUser -> ./controler/controler_add_user.php
        case $path === "/projet/addUser":
            include './controler/controler_add_user.php';
            break ;    

        //route /projet/connexion -> ./controler/controler_connexion.php
        case $path === "/projet/connexion":
            include './controler/controler_connexion.php';
		    break ;
        //route /projet/deconnexion -> ./controler/controler_deconnexion.php
        case $path === "/projet/deco":
            include './controler/controler_deco.php';
            break ;

        //route /projet/error -> ./error.php
        // case $path === "/projet/error":
        //     include './error.php';
		//     break ;
        //route en cas d'erreur
        // case $path !== "/projet/":
        //     include './error.php';
		//     break ;
    }
    include './view/view_footer.php';
?>