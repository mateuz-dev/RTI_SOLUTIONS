<?php

if (isset($_POST["nome"]) && isset($_POST["salario"]) && isset($_POST["genero"]) && isset($_POST["cargo"])){

    $nome = $_POST["nome"];
    $salario = $_POST["salario"];
    $genero = $_POST["genero"];
    $cargo = $_POST["cargo"];

    $aumento = 0;

    if ($salario > 5000){
        $aumento = $salario / 10;
        $salario = $salario + $aumento;
    } else{
        $aumento = $salario / 20;
        $salario = $salario + $aumento;
    }

    $mensagem = "<span>$nome</span> passará a receber <em>R$ $salario</em>, no cargo de <span>$cargo</span>";

} else{
    $mensagem = "AS INFORMAÇÕES NÃO FORAM ENVIADAS CORRETAMENTE";
    exit;
}

?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/iconeBanco.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>FULBANK</title>
</head>


<html>
    <body>
        <p><?=$mensagem?></p>
    </body>
</html>





<style>
    p{
        display: flex;
        align-items: center;
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(50,50,149,1) 38%, rgba(14,76,108,1) 100%);
        color: white;
        padding: 7px;
        border: none;
        border-radius: 7px;
        font-size: 30px;
    }
    span{
        font-size: 40px;
        margin-left: 7px;
        margin-right: 7px;
    }
    em{
        font-size: 50px;
        margin-left: 8px;
        margin-right: 8px;
    }
</style>