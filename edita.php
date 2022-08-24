<?php
    $pos = $_GET['pos'];
    $pos2 = $pos+1;
    $pos3 = $pos+2;
    $pos4 = $pos+3;
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $arquivo = fopen("cliente.txt", "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }
    $dados = explode(";", $linha);
    fclose($arquivo);
    $dados[$pos] = $nome;
    $dados[$pos2] = $cidade;
    $dados[$pos3] = $celular;
    $dados[$pos4] = $email;
    $array = array_filter($dados);
    $file = 'cliente.txt';
    unlink($file);
    $arq = fopen("cliente.txt", "w");
    if($arq == false) 
        die('Não foi possível criar o arquivo!');
    foreach($array as $item){
        $arquivo = 'cliente.txt';
        $texto = $item.";";
        $file = fopen($arquivo, 'a');
        fwrite($file,$texto);
    }
    fclose($arq);
    header("location:cliente.php");
?>