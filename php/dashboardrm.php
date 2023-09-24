<?php

if(isset($_POST['submitt']))
{

    include_once('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    
    $result = mysqli_query($conexao, "DELETE FROM usuarios WHERE usuario='$usuario'");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Usuário Cadastrado</title>
</head>
<body class="p-1 mt-5 text-center">

    <div>
        <h2>USUÁRIO REMOVIDO COM SUCESSO</h2>

        <a href="../html/dashboard.html" class="text-blue text-decoration-none fw-bolder">VOLTAR</a>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
</body>
</html>