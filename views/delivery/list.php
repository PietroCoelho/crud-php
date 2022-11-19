<main>
    <table class="table table-bordered table-dark">

        <thead>
            <tr>
                <th>Codigo</th>
                <th>Titulo</th>
                <th>Descricao</th>
                <th>Data de Entrega</th>
                <th>Entrega Concluida</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($rsDelivery as $delivery) : ?>
                <tr>
                    <td><?php echo $delivery->codigo ?></td>
                    <td><?php echo $delivery->titulo ?></td>
                    <td><?php echo $delivery->descricao ?></td>
                    <td><?php echo date('d/m/Y', strtotime($delivery->prazo_entrega)) ?></td>
                    <td><?php echo $delivery->entrega_concluida == 1 ? 'Concluída' : 'Em andamento' ?></td>
                    <td><a href="update.php?id=<?php echo $delivery->id ?>"><button class="btn btn-primary">Editar</button></a></td>
                    <td><a href="delete.php?id=<?php echo $delivery->id ?>"><button class="btn btn-danger">Excluir</button></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>


    <section>
        <a href="/views/delivery/store.php">
            <button class="btn btn-primary">Inserir Dados</button>
        </a>
        <a href="../../index.php">
            <button class="btn btn-info">Tela inicial</button>
        </a>
    </section>

</main>