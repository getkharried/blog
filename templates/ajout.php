<?php ob_start(); ?>
<form action="index.php?page=post&action=create" method="POST">
    <input type="hidden" name="idClient" value="1">

    <label>Titre</label>
    <input type="text" name="title">

    <label>Contenu</label>
    <input type="text" name="content">

    <input type="submit">
</form>
<?php
$body = ob_get_clean();
require('template.php');
?>