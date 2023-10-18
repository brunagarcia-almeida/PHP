<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<h2 class="fw-light">Editar Cadastro</h2>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $result = $conn->query($sql);
    $exibirRegistros = mysqli_fetch_array($result);
    $id = $exibirRegistros[0];
    $nome = $exibirRegistros[1];
    $dtnasc = $exibirRegistros[2];
    $email = $exibirRegistros[3];
    $profissao = $exibirRegistros[4];

    $row = $result->fetch_object();
?>
<form style="margin-top: 60px;" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar" />
    <input type="hidden" name="id" value="<?php print $id; ?>" />
    <div class="row mb-3">
        <label for="nome" class="col-form-label col-3 text-end">Nome:</label>
        <div class="col-7">
            <input type="nome" name="nome" class="form-control" id="nome" value="<?php print $nome; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="dtnasc" class="col-form-label col-3 text-end">Data de Nascimento:</label>
        <div class="col-3">
            <input class="form-control" type="date" name="dtnasc" id="dtnasc" value="<?php print $dtnasc; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-form-label col-3 text-end">E-mail:</label>
        <div class="col-7">
            <input class="form-control" type="email" name="email" id="email" required value="<?php print $email; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="profissao" class="col-form-label col-3 text-end">Profissão:</label>
        <div class="col-7">
            <input class="form-control" type="text" name="profissao" id="profissao" value="<?php print $profissao; ?>">
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary col-1" type="submit">Salvar</button>
        <button class="btn btn-danger col-1" type="reset">Limpar</button>
    </div>
</form>

<script>
    $("#nome").change(function() {
        $(this).val($(this).val().toUpperCase());
    });
</script>