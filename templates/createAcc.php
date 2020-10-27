<?php ob_start(); ?>
<div class="container">
    <form action="?page=client&action=create" method="POST">
        <div class="row">
            <div class="form-group col">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username">
            </div>

            <div class="form-group col">

                <label>Mail</label>
                <input type="text" name="mail">
            </div>

            <div class="form-group col">

                <label>Nom</label>
                <input type="text" name="nom">
            </div>
            <div class="form-group col">

                <label>Prénom</label>
                <input type="text" name="prenom">
            </div>

            <div class="form-group col">

                <label>Mot de passe</label>
                <input type="text" name="password">
            </div>
            <div class="form-group col">

                <label>Admin</label>
                <input type="text" name="admin">
            </div>
        </div>

            <input type="submit">

    </form>
</div>
<?php
$body = ob_get_clean();
require "template.php"
?>