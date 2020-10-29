<?php ob_start(); ?>
<div class="container">
    <div class="shadow-lg rounded">
        <img class="imgTitle" src="<?= $post['linkImg']; ?>">
        <h1 class="title"><?= $post['title']; ?></h1>
        <p class="text"><?= $post['content']; ?></p>
    </div>
    <?php require_once 'comment.php'; ?>
</div>
</body>
<script type="text/javascript" src="assets/js/ajaxCom.js"></script>
<?php $body = ob_get_clean();
require 'template.php'; ?>