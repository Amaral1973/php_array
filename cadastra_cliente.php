<?php
    if(isset($_POST['but_cadastrar']))
    {
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];
        $celular = $_POST['celular'];
        if(!isset($_POST['email']))
        {
            $email = "XXSem e-mailXX";
        }
        else
        {
            $email = $_POST['email'];
        }
        $arquivo = 'cliente.txt';
        $texto = $nome.";".$cidade.";".$celular.";".$email.";";
        $file = fopen($arquivo,'a');
        fwrite($file,$texto);
        fclose($file);
        echo "<script>alert('Cliente cadastrado!');window.location.href='cliente.php';</script>";
    }
    else
    {
        echo "Sem dados para cadastrar!";
    }
?>