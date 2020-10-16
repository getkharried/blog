<?php ob_start(); ?>
<div class="container">
    <?php foreach ($posts as $post) { ?>
        <div class="row" id="album" style="padding-top: 40px">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://static1.purebreak.com/articles/1/70/46/1/@/298221-peluche-diapo-1.jpg" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title"><?= $post['title']; ?></div>
                        <div class="card-text"><?= $post['content']; ?></div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm">Voir</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">Editer</button>
                            </div>
                            <small class="text-muted">Il y a X mn</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php
    $body = ob_get_clean();
    require 'template.php';
?>