<main>

    <h2 class="mt-3">Excluir Entrega</h2>
    <form method="post">
        <div class="form-group">
            <p>Você deseja excluir entrega <strong><?php echo $rsDelivery->titulo ?></strong>?</p>
        </div>
        <div class="form-group">
            <a href="/views/delivery/index.php"><button type="button" class="btn btn-success">Cancelar</button></a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>
</main>