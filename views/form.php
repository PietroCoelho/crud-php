<div class="container">
    <h2 class="mt-3"><?php echo TITLE ?></h2>
    <form method="POST">
        <div class="form-group">
            <input type="hidden" name="id">
        </div>
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" id="title" class="form-control" name="title" value="">
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" id="description" class="form-control" name="description" value="">
        </div>

        <div class="form-group">
            <label for="dead_line_delivery">Prazo de Entrega</label>
            <input type="date" id="dead_line_delivery" class="form-control" name="dead_line_delivery" value="">
        </div>

        <?php if (HEADER == 'Atualizar Entrega') : ?>
            <div class="form-group">
                <label for="delivery_completed">Entrega Concluida</label>
                <input type="date" id="delivery_completed" class="form-control" name="delivery_completed" value="">
            </div>
        <?php endif; ?>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Salvar</button>
        </div>
    </form>
</div>
<div class="container">
    <a href="./index.php"><button class="btn btn-info">voltar</button></a>
</div>