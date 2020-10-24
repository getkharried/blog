<?php ob_start();?>
<div class="container" id="ajout">
    <form action="index.php?page=post&action=update&id=<?= $post['id']; ?>" method="POST" >
        <input type="hidden" name="idClient" value="1">
        <div class="row">
            <div class="form-group col">
                <label>Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $post['title'];?>">
            </div>
            <div class="form-group col">
                <label>Lien vers image</label>
                <input type="text" class="form-control" id="link" name="link" value="<?= $post['linkImg'];?>">
            </div>
        </div>
        <div class="form-group">
            <label>Contenu</label>
            <textarea class="form-control" name="content" id="content" rows="15"?><?= $post['content'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour le post</button>
    </form>
    <?php
    $body = ob_get_clean();
    require('template.php');
    ?>
</div>