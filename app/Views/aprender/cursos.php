<h1 class="h1 text-center">Cursos</h1>
<div class="row justify-content-center">
    <?php if (!empty($cursos) && is_array($cursos)) :
        foreach ($cursos as $curso) : ?>
            <div class="col-sm-2">
                <div class="card m-2" style="width: 18rem;">
                    <h5 class="card-header">Curso</h5>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $curso['shortname'] ?></h5>
                        <p class="card-text"><?php echo $curso['fullname'] ?></p>
                        <a href="<?php echo base_url('../moodle/course/view.php?id=' . $curso['id']) ?>" class="btn btn-primary"><i class="fas fa-door-open"></i> Selecionar</a>
                    </div>
                </div>
            </div>
        <?php endforeach;
    else :
        ?>
        <div class="alert alert-secondary" role="alert">Não existem cursos cadastrados!</div>
    <?php
    endif; ?>
</div>
</div>
<center><a href="<?php echo base_url('../categorias') ?>" class="btn btn-outline-info m-2"><i class="fas fa-undo"></i> Voltar</a></center>