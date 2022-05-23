<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style_menu.css">
    <link rel="stylesheet" href="./asset/css/style_accueil.css">
    <link rel="stylesheet" href="./asset/css/style_form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="background">
        <header>
            <div id="navbar">
                <nav>
                    <div>
                        <a href="/projet/accueil"><img src="./asset/img/logo.webp" alt="logo" id="logo"></a>
                    </div>
                    <div id="navbar-container">
                        <div id="catalogue">
                            <a href="#">Consulter les événements</a>
                        </div>
                        <div id="searchForm">
                            <form action="" method="post">
                                <input type="search" name="search" id="searchBar">
                                <input type="submit" value="Search" id="searchButton">
                            </form>
                        </div>
                        <div id="selectFam">
                            <form action="" method="post">
                                <label for="chooseFam">Vous êtes :
                                    <select name="fam" id="">
                                        <option value="artiste" selected>Artiste</option>
                                        <option value="orga">Organisateur</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                        <div id="connexion">
                            <a href="/projet/connexion">Connexion</a>
                            <a href="/projet/create_user">Inscription</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    