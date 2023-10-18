<h2 class="fw-light">Listar Cadastros</h2>
<?php
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);
    $qtd = $result->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-bordered'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nome Completo</th>";
        echo "<th>Data de Nascimento</th>";
        echo "<th>E-mail</th>";
        echo "<th>Profissão</th>";
        echo "<th class='flex'>#</th>";
        echo "</tr>";
        while($exibirRegistros = mysqli_fetch_array($result)) {
            $id = $exibirRegistros[0];
            $nome = $exibirRegistros[1];
            $dtnasc = $exibirRegistros[2];
            $email = $exibirRegistros[3];
            $profissao = $exibirRegistros[4];
            
            echo "<tr>";
            echo        "<td>$id</td>";
            echo        "<td>$nome</td>";
            echo        "<td>$dtnasc</td>";
            echo        "<td>$email</td>";
            echo        "<td>$profissao</td>";
            echo        "<td class='flex'>";
            echo "<button class='btn' onclick=\"location.href='?page=editar&id=".$id."';\"><i class='bi-pencil-square'></i></button>";
            echo        "<button class='btn' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$id."';}else{false;}\"><i class='bi-trash3'></i></button>";
            echo        "</td>";
            echo    "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>