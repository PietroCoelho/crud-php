<main>
    <div class="container">
        <h3>Adicionando Item a Listagem</h3>
    </div>

    <form method="post">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="numero">Numero</label>
            <input type="text" name="numero" id="numero">

            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-group">
            <input type="submit" id="salvar_form" value="Salvar" class="btn btn-success" />
        </div>
    </form>

    <section class="mt-3">
        <a href="../index.php"><button class="btn btn-info">Voltar</button></a>
    </section>
</main>