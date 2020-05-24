<h1 class="h1 text-center">Categorias</h1>
<div class="row justify-content-center">
    <?php if (!empty($categorias) && is_array($categorias)) :
        foreach ($categorias as $categoria) : ?>
            <div class="col-sm-2">
                <div class="card m-2" style="width: 18rem;">
                    <h5 class="card-header">Categoria</h5>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $categoria['name'] ?></h5>
                        <p class="card-text"><?php echo $categoria['description'] ?></p>
                        <a href="<?php echo base_url('../cursos/' . $categoria['id']) ?>" class="btn btn-primary rounded-pill"><i class="fas fa-door-open"></i> Selecionar</a>
                    </div>
                </div>
            </div>
    <?php endforeach;
    endif; ?>
</div>
</div>
<center><a href="<?php echo base_url('../../') ?>" class="btn btn-outline-info m-2"><i class="fas fa-undo"></i> Voltar</a></center>