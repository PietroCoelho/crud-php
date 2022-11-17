<div class="container">
    <h2 class="mt-3"><?php echo TITLE ?></h2>
    <form method="POST">
        <div class="form-group">
            <input type="hidden" name="id">
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome aqui">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" id="email" class="form-control" name="email" placeholder="Digite seu email aqui">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="number" id="telefone" class="form-control" name="numero" placeholder="Digite seu número de telefone aqui">
        </div>

        <div class="form-group">
            <button class="btn btn-success" type="submit">Salvar</button>
        </div>
    </form>
</div>
<div class="container">
    <a href="./index.php"><button class="btn btn-info">voltar</button></a>
</div>