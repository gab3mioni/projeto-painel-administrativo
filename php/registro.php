<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario,senha) VALUES ('$usuario','$senha')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro Enviado</title>
</head>
<body class="p-1 mt-5 text-center">

    <div>
        <h2>CADASTRO ENVIADO COM SUCESSO</h2>

        <p>Aguarde aprovação, você receberá um e-mail de confirmação de algum dos administradores</p>

        <a href="../html/index.html" class="text-blue text-decoration-none fw-bolder">VOLTAR</a>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
</body>
</html>