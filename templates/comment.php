<div class="shadow-lg rounded">
        <div class="input-group mb-3">
            <input type="hidden" value="<?= $_SESSION['idClient']; ?>" id="sessionId">
            <input type="hidden" value="<?= $_GET['id']; ?>" id="idPost">
            <input type="text" class="form-control" placeholder="Ecrire un commentaire" id="link">
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="button" id="sendCom">Envoyer le commentaire</button>
            </div>
        </div>
        <div id="commentGrp">
            <ul class="list-unstyled">
                <li class="media">
                    <img src="..." class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">Commentaire</h5>
                        Superbe article, très belle façon d'écrire
                    </div>
                </li>
            </ul>
        </div>
    </div>