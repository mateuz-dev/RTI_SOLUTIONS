<?php
    if (isset($_POST["cidadeOrigem"]) && isset($_POST["cidadeDestino"]) && isset($_POST["distancia"]) && isset($_POST["pedagio"])){

        $cidadeOrigem = $_POST["cidadeOrigem"];
        $cidadeDestino = $_POST["cidadeDestino"];
        $distancia = $_POST["distancia"];
        $pedagio = $_POST["pedagio"];
        
        $valorTotal = (9.40 * $pedagio) + (6 * $distancia);
    
    } else{
        echo "VOCÊ NÃO ENVIOU OS DADOS";
        exit;
    }
?>





<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/iconeCaminhao.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>PHL | Cálculo do Frete</title>
</head>

<body>
    <p class="resultado">A viagem de <span><?= $cidadeOrigem ?></span> à <span><?= $cidadeDestino ?></span> irá custar o total de R$<em><?= number_format($valorTotal,2, ",", ".")?></em> </p>
</body>

</html>





<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }
    .resultado{
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .resultado > span{
        font-size: 30px;
        font-style: normal;
        font-weight: bold;
        padding-left: 8px; padding-right: 8px;
    }
    .resultado > em{
        font-size: 50px;
        font-style: normal;
        font-weight: bold;
        padding-left: 8px; padding-right: 8px;
    }
</style>