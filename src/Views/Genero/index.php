<?php require "../src/Views/cabecalho.php"; ?>

<h1>Gêneros</h1>

<?php
if (isset($resultado)) {
    echo "<div class='alert alert-info'> $resultado        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
}
?>


<a class="btn btn-success" href="/generos/novo">Novo Gênero</a>

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
    </tr>
    </thead>
    <tbody>
    <?php

    while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?=$linha['id']?></td>
            <td><?php echo $linha['nome']; ?></td>
            <td><a href="/generos/alterar/<?=$linha['id']?>">Alterar</a></td>
            <td><a href="/generos/excluir/<?=$linha['id']?>">Excluir</a></td>
        </tr>
        <?php
    }

    ?>
    </tbody>
</table>


<?php require "../src/Views/rodape.php"; ?>
