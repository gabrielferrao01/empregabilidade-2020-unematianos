<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>ReAprender - Reaprendendo a trabalhar digitalmente!</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=<?php echo base_url('../css/pricing.css') ?> rel="stylesheet">

</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <img src=<?php echo base_url('../images/logo.png') ?> class="my-0 mr-md-auto">
        <a class="btn btn-outline-primary" href="#">Entrar</a>
    </div>
    <div class="container-fluid">
        <h1 class="h1 text-center">Categorias</h1>
        <div class="row justify-content-center">
            <?php if (!empty($categorias) && is_array($categorias)) :
                foreach ($categorias as $categoria) : ?>
                    <div class="col-sm-2">
                        <div class="card m-2" style="width: 18rem;">
                            <h5 class="card-header">Categoria</h5>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $categoria['name'] ?></h5>
                                <p class="card-text"><?php echo $categoria['description'] ?></p>
                                <a href="<?php echo base_url('../cursos/'.$categoria['id']) ?>" class="btn btn-primary">Selecionar</a>
                            </div>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
    <center><a href="<?php echo base_url('../../') ?>" class="btn btn-outline-info m-2">Voltar</a></center>
    <footer class="border-top text-center">
        <small class="d-block mb-3 text-muted m-2">Reaprender - Contato</small>
    </footer>

    <script src="https://kit.fontawesome.com/cafe4ad433.js" crossorigin="anonymous"></script>
</body>

</html>