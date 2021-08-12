<?php

if ($_POST["cidadeOrigem"] != "" && $_POST["cidadeDestino"] != "" && $_POST["distancia"] != "" && $_POST["pedagio"] != ""){
    $cidadeOrigem = $_POST["cidadeOrigem"];
    $cidadeDestino = $_POST["cidadeDestino"];
    $distancia = $_POST["distancia"];
    $pedagio = $_POST["pedagio"];

    $valorTotal = (9.40 * $pedagio) + (6 * $distancia);

    echo "A viagem de <span>$cidadeOrigem</span> à <span>$cidadeDestino</span> irá custar o valor total de R$ <span>$valorTotal</span>";

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
    <link rel="shortcut icon" href="img/iconeCaminhao.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>PHL | Cálculo do Frete</title>
</head>

</html>

<style>
    body{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        background-image: url(img/background.jpg);
        background-position: center center;
        background-size: cover;
        background-blend-mode: darken;
        background-color: rgba(0, 0, 0, 0.600);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 35px;
        color: white;
    }
    span{
        font-weight: bold;
        font-size: 45px;
        padding-left: 10px; padding-right: 10px; 
    }
</style>
