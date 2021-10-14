<?php
require_once("backend/controllers/Ccadastro.php");
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

        <!-- * Inicio formulário -->
        <?php
          $controller = new ControllerCadastro();
          $resultado = $controller->listar($_GET["id"]);
        ?>
        <div class="container-fluid main-frame p-4">    
            <h3 class="">Cadastrar agendamento de potenciais clientes</h3>
            <p>Sistema utilizado para agendamento de serviços</p>
            <form action="backend/controllers/Ccadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" placeholder="name@example.com" value="<?php echo $resultado[0]['nome'] ?>" name="txtNome">
                    <label for="nome">Nome: </label>
                  </div>

                <div class="form-floating mb-3">
                    <input type="text" name="txtTelefone" id="tel" class="form-control phone" placeholder="(xx) xxxxx-xxxx" value="<?php echo $resultado[0]['telefone'] ?>">
                    <label for="tel">Telefone: </label>
                </div>

                <div class="form-floating mb-3">
                    <select name="txtOrigem" id="origem" class="form-select" aria-label="Floating label select example">
                        <option <?php if($resultado[0]['origem'] == "celular"){ echo "selected"; } ?> value="celular">Celular</option>
                        <option <?php if($resultado[0]['origem'] == "fixo"){ echo "selected"; } ?>value="fixo">Fixo</option>
                    </select>
                    <label for="origem">insira a origem</label>
                </div>

                <div class="form-floating mb-3">
                    <input value="<?php echo $resultado[0]['data_contato'] ?>" type="date" name="txtDataContato" id="data" class="form-control">
                    <label for="data">Data de contato</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="insira uma observação" id="obs" style="height: 100px" name="txtObservacao"><?php echo $resultado[0]['observacao'] ?></textarea>
                    <label for="obs">Observação</label>
                </div>

                <button type="submit" class="btn btn-success">editar</button>
            </form>
        </div>

        <!-- * Final formulário -->

    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.inputmask.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>