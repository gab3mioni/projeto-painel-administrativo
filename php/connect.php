<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');


if (!empty($username)) {
    if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "painel_administrativo";

// criando conexão com o banco de dados
$conexao = new mysqli ( $host, $dbusername, $dbpassword, $dbname );

if (mysqli_connect_error()){
    die('Erro ao conectar  ( ' . mysqli_connect_errno()  .') '
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO usuarios(user, senhax')
    values('$username','$password')";
    if ($conexao->query($sql)){
        echo "Novo trecho inserido com sucesso";
    }
    else{
        echo "Erro: ". $sql ."<br>". $conexao->error;
    }
    $conexao->close();
}
}
else{
    echo "Senha não pode estar vazia!";
    die();
}
}else{
    echo "Usuário não pode estar vazio!";
    die();
}
?>