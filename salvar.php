<?php 
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $dtnasc = $_POST["dtnasc"];
            $email = $_POST["email"];
            $profissao = $_POST["profissao"];

            $sql = "INSERT INTO usuarios (NOME, DTNASC, EMAIL, PROFISSAO)
                    VALUES ('{$nome}', '{$dtnasc}', '{$email}', '{$profissao}')";

            $result = $conn->query($sql);

            if($result == true) {
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível cadastrar!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }

        break;
        case 'editar':
            $nome = $_POST["nome"];
            $dtnasc = $_POST["dtnasc"];
            $email = $_POST["email"];
            $profissao = $_POST["profissao"];

            $sql = "UPDATE usuarios SET nome='{$nome}', 
                dtnasc='{$dtnasc}',
                email='{$email}',
                profissao='{$profissao}'
            WHERE id=".$_REQUEST["id"];

            $result = $conn->query($sql);

            if($result == true) {
                echo "<script>alert('Atualizado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível atualizar!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
        break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
            $result = $conn->query($sql);
            if($result == true) {
                echo "<script>alert('Excluído com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível excluir!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
        break;
    }
?>