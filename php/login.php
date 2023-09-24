<?php
include('config.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])){

    if(strlen($_POST['usuario']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $usuario = $conexao->real_escape_string($_POST['usuario']);
        $senha = $conexao->real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL:  "  . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if( $quantidade == 1 ) {

            $usuario = $sql_query->fetch_assoc();

            if(!ISSET($_SESSION)) {
                session_start();
            }

            $_SESSION['usuario'] = $usuario['id'];

            header("Location: ../html/dashboard.html");
            
        } else {
            echo "Falha ao logar! Usuário ou senhas incorretas";
        }
    }
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

    <div class="mt-5">
        <a href="../html/index.html" class="text-blue text-decoration-none fw-bolder">VOLTAR</a>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
</body>
</html>