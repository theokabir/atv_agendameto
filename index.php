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
                    <a class="nav-link active" aria-current="page" href="index.html">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="listar.html">Consultar</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>          

        <!-- * Final navbar -->

        <!-- * Inicio formulário -->
        <div class="container-fluid main-frame p-4">    
            <h3 class="">Cadastrar agendamento de potenciais clientes</h3>
            <p>Sistema utilizado para agendamento de serviços</p>
            <form action="backend/controllers/Ccadastro.php?funcao=cadastro" method="post">
                <div class="form-floating mb-3">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="name@example.com">
                    <label for="nome">Nome: </label>
                  </div>

                <div class="form-floating mb-3">
                    <input type="tel" name="tel" id="tel" class="form-control" placeholder="(xx) xxxxx-xxxx">
                    <label for="tel">Telefone: </label>
                </div>

                <div class="form-floating mb-3">
                    <select name="origem" id="origem" class="form-select" aria-label="Floating label select example">
                        <option selected>Origem</option>
                        <option value="celular">Celular</option>
                        <option value="fixo">Fixo</option>
                    </select>
                    <label for="origem">insira a origem</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" name="data_agendamento" id="data" class="form-control">
                    <label for="data_agendamento">Data de contato</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" name="obs" placeholder="insira uma observação" id="obs" style="height: 100px"></textarea>
                    <label for="obs">Observação</label>
                </div>

                <input type="submit" value="Cadastrar" class="btn btn-primary">
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