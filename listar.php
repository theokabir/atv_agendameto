<?php
require_once("backend/controllers/Ccadastro.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3º bimestre</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="container">

        <!-- * Inicio navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Sistema Web</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="listar.php">Consultar</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>          

        <!-- * Final navbar -->

        <!-- * Inicio da listagem -->
        <div class="container-fluid main-frame p-4"> 
            <h4>Consultar - Contatos da agenda</h4>
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Origem</th>
                        <th>Contato</th>
                        <th>Observação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $controller = new ControllerCadastro();
                        $resultado = $controller->listar(0);
                        if (count($resultado) == 0) header("location: index.php");
                        for($i = 0; $i < count($resultado); $i++){
                    ?>  
                        <tr>
                            <td><?php echo $resultado[$i]['nome'] ?></td>
                            <td><?php echo $resultado[$i]['telefone'] ?></td>
                            <td><?php echo $resultado[$i]['origem'] ?></td>
                            <td><?php echo $resultado[$i]['data_contato'] ?></td>
                            <td><?php echo $resultado[$i]['observacao'] ?></td>
                            <td>
                                <button class="btn btn-outline-success" onclick="location.href='editar.php?id=<?php echo $resultado[$i]['id']; ?>'">Editar</button>
                                <button class="btn btn-outline-danger"  onclick="location.href='excluir.php?id=<?php echo $resultado[$i]['id']; ?>'">Excluir</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- * Final da listagem -->

    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>