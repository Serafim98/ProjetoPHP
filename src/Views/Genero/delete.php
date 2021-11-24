<?php require "../src/Views/cabecalho.php";
while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
    ?>

    <h1>Excluir Gênero</h1>

    <form action="/generos/remover/<?=$linha['id']?>" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome">Informe o nome:</label>
                <input disabled value="<?= $linha['nome']?>" type="text" class="form-control" name="nome" id="nome"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>

<?php }
require "../src/Views/rodape.php"; ?>
