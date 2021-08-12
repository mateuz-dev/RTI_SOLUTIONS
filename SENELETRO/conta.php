<?php

if (isset($_POST["consumo"]) && isset($_POST["primeiroNome"]) && isset($_POST["sobrenome"]) && isset($_POST["rua"]) && isset($_POST["numeroCasa"])){

    $consumo = $_POST["consumo"];
    $primeiroNome = $_POST["primeiroNome"];
    $sobrenome = $_POST["sobrenome"];
    $rua = $_POST["rua"];
    $numeroCasa = $_POST["numeroCasa"];

    $valorkWh = 0.42;

    if ($consumo > 120) {
        $valorkWh = 0.42;
        $estilo = "altoConsumo";
        $agradecimento = "";
    } else{
        $valorkWh = 0.32;
        $estilo = "baixoConsumo";
        $agradecimento = "<h2 class=\"<?= $estilo ?>\">Obrigado por economizar</h2>";
    }

    $valorTotal = $consumo * $valorkWh;

} else{
    echo "VOCÊ NÃO ENVIOU OS DADOS CORRETAMENTE";
    exit;
}

?>





<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100vw;
        height: 100vh;
        background: rgb(89,46,32);
        background: linear-gradient(90deg, rgba(89,46,32,1) 0%, rgba(191,72,72,1) 50%, rgba(164,127,73,1) 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white;
    }
    main{
        background-color: rgba(255, 255, 255, 0.400);
        border: none;
        border-radius: 7px;
        padding: 10px;
    }
    .altoConsumo{
        color: rgb(224, 96, 96);
    }
    .baixoConsumo{
        color: rgb(157, 209, 151);
    }
    p > em{
        font-size: 30px;
        font-style: normal;
        font-weight: bold;
        padding-left: 8px; padding-right: 8px;
    }
</style>





<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/iconeRaio.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>SENELETRO | Cálculo Conta de Luz</title>
</head>

<body>
    <main>
        <h1>Conta de Luz de <?= $primeiroNome ?></h1>
        <p><?="$rua, $numeroCasa"?></p>
        <p class="<?= $estilo ?>">Consumo: <?= $consumo ?> KWh</p>
        <p>valor a pagar: R$<em><?= number_format($valorTotal, 2, ",", ".")?></em></p>
        <p> <?= $agradecimento ?></p>
    </main>
</body>

</html>