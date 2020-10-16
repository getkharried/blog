<?php //ob_start(); ?>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/98cf9202be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrapCustom.css">
</head>

<body>

    <div class="container">
        <?php foreach($posts as $post){ ?>
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
        <footer class="text-muted">
            Créé par Louis Pelarrey
        </footer>
    </div>
</body>

</html>

<?php //ob_get_clean(); ?>