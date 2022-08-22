<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Clientes</title>
</head>
<body>
    <center><h2>Clientes</h2></center>
    <hr/>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
            include("menu.php");
        ?>
        </ul>&nbsp;
    </nav>
    <br/>
    <br/>
    <div class="container padding-left: ($spacer * .5)">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Clientes</h4>
          </div>
          <div class="card-body">
            Conteúdo
            <button type="button" class="w-100 btn btn-lg btn-outline-secondary">Ver Clientes</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Mês</h4>
          </div>
          <div class="card-body">
            Conteúdo
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Geral</h4>
          </div>
          <div class="card-body">
           Conteúdo
            <button type="button" class="w-100 btn btn-lg btn-outline-secondary">Visão Geral</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <footer>
        <hr/>
        <center>
            <h6>Desenvolvido por: XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6>
            <h7>SENAI - CTM - MARINGÁ - 2022</h7>
        </center>
    </footer>
</body>
</html>