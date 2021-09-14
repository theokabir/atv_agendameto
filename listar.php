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
                    <tr>
                        <td>Jorgeson</td>
                        <td>(11)92894-9203</td>
                        <td>Celular</td>
                        <td>25/08/2021</td>
                        <td>agendado para 30/08/2021</td>
                        <td>
                            <button class="btn btn-outline-success">Editar</button>
                            <button class="btn btn-outline-danger">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jorgilson</td>
                        <td>(11)99994-9203</td>
                        <td>Celular</td>
                        <td>25/08/2021</td>
                        <td>agendado para 01/02/2022</td>
                        <td>
                            <button class="btn btn-outline-success">Editar</button>
                            <button class="btn btn-outline-danger">Excluir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- * Final da listagem -->

    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>