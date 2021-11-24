<?php require "../src/Views/cabecalho.php"; ?>

<h1>Novo Gênero</h1>

<form action="/generos/salvar" method="POST">
    <div class="row">
        <div class="col">
            <label for="descricao">Informe o nome:</label>
            <input type="text" class="form-control" name="nome" id="nome"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>

<?php require "../src/Views/rodape.php"; ?>
