<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="createPost.php">Créer un post <span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <li class="nav-item dropdown">
                <?php //<i class="fas fa-user-circle fa-white fa-2x nav-link nav-item dropdown" href="#" id="profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i> 
                ?>
                <div class="dropdown-menu" aria-labelledby="profile">
                    <a class="dropdown-item" href="#">Voir mon profil</a>
                    <a class="dropdown-item" href="#">Paramètres</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Se déconnecter</a>
                </div>
            </li>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
</header>