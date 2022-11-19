<div class="container">
    <h2 class="mt-3"><?php echo TITLE ?></h2>
    <form method="POST">
        <div class="form-group">
            <input type="hidden" name="id" value="<? echo $rsDelivery->id ?>">
        </div>
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" id="title" class="form-control" name="title" value="<?php echo $rsDelivery->titulo ?>">
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" id="description" class="form-control" name="description" value="<?php echo $rsDelivery->descricao ?>">
        </div>

        <div class="form-group">
            <label for="dead_line_delivery">Prazo de Entrega</label>
            <input type="date" id="dead_line_delivery" class="form-control" name="dead_line_delivery" value="<?php echo $rsDelivery->prazo_entrega ?>">
        </div>

        <?php if (isset(($id)) && !empty($id)) : ?>
            <div class="form-group">
                <label for="delivery_completed">Entrega Concluida</label>
                <div>
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="delivery_completed" value="true" checked> Ativo
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="delivery_completed" value="false" <?= $rsDelivery->entrega_concluida == '0' ? 'checked' : '' ?>> Inativo
                        </label>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Salvar</button>
        </div>
    </form>
</div>
<div class="container">
    <a href="/views/delivery/index.php"><button class="btn btn-info">voltar</button></a>
</div>