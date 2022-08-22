<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    if($login=="admin" && $senha=="12345")
    {
        echo "<script>window.location.href='dash.php';</script>";
    }
    else
    {
        echo "<script>alert('Login ou senha incorreto!Tente novamente!');window.location.href='index.php';</script>";
    }
?>