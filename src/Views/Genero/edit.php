<?php require "../src/Views/cabecalho.php";
    while($linha = $dados->fetch(PDO::FETCH_ASSOC)){
?>

<h1>Alterar Gênero</h1>

<form action="/generos/atualizar/<?=$linha['id']?>" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome">Informe a descrição:</label>
            <input value="<?= $linha['nome']?>" type="text" class="form-control" name="nome" id="nome"/>
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
