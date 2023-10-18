<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Listar Cadastros</title>
</head>

<body>
    <div class="container">
        <div class="col-10 mx-auto flex">
            <nav>
                <h2 class="fw-light">Bem Vindos!</h2>
                <ul>
                    <li><a href="?page=cadastro"><button class="btn btn-secondary" type="button">Novo</button></a></li>
                </ul>
                <ul>
                    <li><a href="?page=listar"><button class="btn btn-secondary" type="button">Listar</button></a></li>
                </ul>
            </nav>
            
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <?php 
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "cadastro":
                        include("cadastro.php");
                    break;
                    case "listar":
                        include("listar.php");
                    break;
                    case "salvar":
                        include("salvar.php");
                    break;
                    case "editar":
                        include("editar.php");
                    break;
                    default:
                        echo "";
                }   
            ?>
        </div>
    </div>
</body>
</html>