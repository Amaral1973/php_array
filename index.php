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
    <br/>
    <br/>
    <div class="row row-cols-1 row-cols-md-3 mb-3 position-relative">
      <div class="col position-absolute top-50 start-50 translate-middle-x">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
            </svg>&nbsp;&nbsp;<b>Login</b></h4>
          </div>
          <div class="card-body">
            <form action="login.php" method="post">
                <label><b>Login</b></label> 
                <input type="text" name="login" placeholder="Digite o seu login" maxlength="30" required="required" autofocus class="form-control border-color:gray" />
                <br/>
                <label><b>Senha</b></label> 
                <input type="password" name="senha" placeholder="Digite a sua senha" maxlength="30"  required="required" class="form-control" />
                <br/>
                <input type="submit" value="Login" class="btn btn-outline-secondary" />
            </form>
          </div>
        </div>
      </div>
</body>
</html>