<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "gilmar";
$dbsenha = "senha.123";

$login = $_POST["login"];
$senha = $_POST["senha_login"];

if (empty($login) || empty($senha_login)) {
    if (empty($login)) {
        echo "Campo login não pode ser vazio<br><br>";
    }
    if (empty($senha_login)) {
        echo "Campo senha não pode ser vazio<br><br>";
    }
} else {
    try {
        $pdo = new PDO($dsn, $dbuser, $dbsenha);

        $sqlCommand = "select nome, sobrenome, senha from usuario where email = '$login';";
        $sqlCommand = $pdo->query($sqlCommand);
        if ($sqlCommand->rowCount() == 1) {
            $resposta = $sqlCommand->fetch();
            if (password_verify($senha_login, $resposta["senha"])) {
                echo "Bem vindo ao sistema, ".$resposta["nome"]." ".$resposta["sobrenome"]."<br>";
            } else {
                echo "Login inválido<br>";
            }
        }
    } catch (PDOException $e) {
        echo "Erro:<br>" . $e->getMessage();
    }
}
