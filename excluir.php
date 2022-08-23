<?php
    $pos = $_GET['pos'];
    $pos2 = $pos+1;
    $pos3 = $pos+2;
    $pos4 = $pos+3;
    $arquivo = fopen("cliente.txt", "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }
    $dados = explode(";", $linha);
    fclose($arquivo);
    unset($dados[$pos]);
    unset($dados[$pos2]);
    unset($dados[$pos3]);
    unset($dados[$pos4]);
    $array = array_filter($dados);
    $file = 'cliente.txt';
    unlink($file);
    $arq = fopen("cliente.txt", "w");
    if($arq==false) die('Não foi possível criar o arquivo!');
    foreach($array as $item){
        $arquivo = 'cliente.txt';
        $texto = $item.";";
        $file = fopen($arquivo, 'a');
        fwrite($file,$texto);
    }
    fclose($arq);
    header("location:cliente.php");
?>