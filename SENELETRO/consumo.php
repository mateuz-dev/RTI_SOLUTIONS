<?php

if ($_POST["consumo"] != "" && $_POST["primeiroNome"] != "" && $_POST["sobrenome"] != "" && $_POST["rua"] != "" && $_POST["numeroCasa"] != ""){
    $consumo = $_POST["consumo"];
    $primeiroNome = $_POST["primeiroNome"];
    $sobrenome = $_POST["sobrenome"];
    $rua = $_POST["rua"];
    $numeroCasa = $_POST["numeroCasa"];

    $valorkWh = 0.42;

    echo "Conta de Luz de $primeiroNome";
    echo "<br><br>";
    echo "$rua, $numeroCasa";
    echo "<br><br>";
    echo "Consumo: $consumo kWh";
    echo "<br><br>";
    if ($consumo > 120) {
        $valorkWh = 0.42;
    } elseif ($consumo <= 120) {
        $valorkWh = 0.32;
        echo "Obrigado por economizar";
        echo "<br><br>";
    }

    $valorTotal = $consumo * $valorkWh;
    echo "Valor a Pagar: R$ $valorTotal";

} else{
    echo "Preencha os campos corretamente";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SENELETRO | Conta de Luz</title>
</head>

</html>

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

</style>