<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Clientes</title>
</head>

<body>
    <?php
    $nome = $_GET['pos'];
    $cidade = $nome + 1;
    $celular = $nome + 2;
    $email = $nome + 3;
    $arquivo = fopen("cliente.txt", "r");
    while (!feof($arquivo)) {
        $linha = fgets($arquivo);
    }
    $dados = explode(";", $linha);
    fclose($arquivo);
    ?>
    <center>
        <h2>Clientes</h2>
    </center>
    <hr />
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            include("menu.php");
            ?>
        </ul>&nbsp;
    </nav>
    <br />
    <br />
    <div class="row row-cols-1 row-cols-md-2 mb-2 position-relative">
        <div class="col position-absolute top-50 start-50 translate-middle-x">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>&nbsp;&nbsp;<b>Edição de Clientes</b></h4>
                </div>
                <div class="card-body">
                    <form action="edita.php?pos=<?php echo $nome; ?>" method="post">
                        <label>Nome</label><br />
                        <input type="text" name="nome" value="<?php echo $dados[$nome]; ?>" required />
                        <br />
                        <label>Cidade</label><br />
                        <input type="text" name="cidade" value="<?php echo $dados[$cidade]; ?>" required />
                        <br />
                        <label>Celular</label><br />
                        <input type="text" name="celular" value="<?php echo $dados[$celular]; ?>" required />
                        <br />
                        <label>e-mail</label><br />
                        <input type="email" name="email" value="<?php echo $dados[$email]; ?>" />
                        <br />
                        <br />
                        <input type="submit" value="Atualizar" class="btn btn-outline-secondary" name='but_atualizar' />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>