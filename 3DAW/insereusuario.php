<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "gilmar";
$dbsenha = "senha.123";

$nome = $sobrenome = $email = $senha = "nome";

$nome = strtoupper($_POST["nome"]);
$sobrenome = strtoupper($_POST["sobrenome"]);
$email = $_POST["email"];
$senha = $_POST["senha"];

if (!empty($_POST["senha"])) $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

if (empty($nome) || empty($sobrenome) || empty($email) || empty($senha)) {
    if (empty($nome)) {
        echo "Campo nome não pode ser vazio<br><br>";
    }
    if (empty($sobrenome)) {
        echo "Campo sobrenome não pode ser vazio<br><br>";
    }
    if (empty($email)) {
        echo "Campo email não pode ser vazio<br><br>";
    }
    if (empty($senha)) {
        echo "Campo senha não pode ser vazio<br><br>";
    }
} else {
    try {
        $pdo = new PDO($dsn, $dbuser, $dbsenha);

        $sqlCommand = "select * from usuario where nome = '$nome' and sobrenome = '$sobrenome' and email = '$email';";
        $sqlCommand = $pdo->query($sqlCommand);
        if ($sqlCommand->rowCount() > 0) {
            echo "Usuário já existe no sistema....<br><br>";
        } else {
            $sqlCommand = "start transaction;";
            $sqlCommand = $pdo->query($sqlCommand);
            $sqlCommand = "insert into usuario set nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha';";
            $sqlCommand = $pdo->query($sqlCommand);
            $sqlCommand = "select * from usuario where nome = '$nome' and sobrenome = '$sobrenome' and email = '$email';";
            $sqlCommand = $pdo->query($sqlCommand);

            if ($sqlCommand->rowCount() != 1) {
                echo "Erro ao inserir o usuário<br><br> ";
                $sqlCommand = "rollback;";
                $sqlCommand = $pdo->query($sqlCommand);
            } else {
                echo "Usuário cadastrado com sucesso<br><br>";
                $sqlCommand = "commit;";
                $sqlCommand = $pdo->query($sqlCommand);
            }
        }
    } catch (PDOException $e) {
        echo "Erro:<br>" . $e->getMessage();
    }
}
