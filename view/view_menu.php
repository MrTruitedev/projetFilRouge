<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style_menu.css">
    <link rel="stylesheet" href="./asset/css/style_accueil.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div id="navbar">
            <nav>
                <div>
                    <img src="./asset/img/logo.webp" alt="logo" id="logo">
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
                        <a href="#">Connexion</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>