<?php ob_start(); ?>
<div class="container">
    <div class="shadow-lg rounded">
        <img class="imgTitle" src="<?= $post['linkImg']; ?>">
        <h1 class="title"><?= $post['title']; ?></h1>
        <p class="text"><?= $post['content']; ?></p>
    </div>
</div>
</body>
<?php $body = ob_get_clean();
require 'template.php'; ?>