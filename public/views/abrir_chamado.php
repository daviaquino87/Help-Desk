<?php require_once '../../services/validation.php'?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <script src="../js/script.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
  <?php include_once '../../partials/navBar.php';?>

    <div class="container mt mt-5">
      <div class="col align-self-cente">
        <div class="card conteudo">
          <div class="card-head text-start d-flex justify-content-between p-2">
            <h3 style="color: #9400d3">Novo chamado</h3>
            <button class='btn btn-outline-primary' onClick={voltar()}> Voltar </button>
          </div>
          <div class="card-body">
            <div class="card mb-3 bg-light">
              <div class="card-body">
              <div class="row">
          <div class="col">

            <form>
              <div class="form-group">
                <label>Título</label>
                <input type="text" class="form-control" placeholder="Título">
              </div>

              <div class="form-group">
                <label>Categoria</label>
                <select class="form-control">
                  <option>Criação Usuário</option>
                  <option>Impressora</option>
                  <option>Hardware</option>
                  <option>Software</option>
                  <option>Rede</option>
                </select>
              </div>

              <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <button class="btn btn-lg btn-block text-white" style="background-color: #9400d3" type="submit">Abrir</button>
                </div>
              </div>
            </form>

          </div>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
