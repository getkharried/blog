<?php ob_start(); ?>
<div class="container">
    <div class="row" id="album">
        <?php foreach ($posts as $post) { ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?= $post['linkImg']; ?>" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title"><?= $post['title']; ?></div>
                        <div class="card-text"><?= $post['content']; ?></div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='?page=post&action=read&id=<?= $post['id']; ?>'">Voir</button>
                                <button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='?page=post&action=update&id=<?= $post['id']; ?>'">Editer</button>
                            </div>
                            <small class="text-muted"><?= "Il y a " . round((strtotime(date('Y-m-d H:i:s')) - strtotime($post['created_at']))/86400) . " jours"; ?></small>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="location.href='?page=post&action=delete&id=<?= $post['id']; ?>'">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php
$body = ob_get_clean();
require 'template.php';
?>