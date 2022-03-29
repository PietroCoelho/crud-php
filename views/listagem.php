<main>
    <table class="table table-bordered table-dark">

        <thead>
            <tr>
                <th>codigo</th>
                <th>nome</th>
                <th>email</th>
                <th>numero</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($rs as $data) : ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['nome'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['numero'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>


    <section>
        <a href="./cadastrar.php">
            <button class="btn btn-info">Inserir Dados</button>
        </a>
    </section>

</main>