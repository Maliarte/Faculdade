<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Adicionar novo usuário</h1>

    <form class="cadastrar" action="" method="POST">
        Nome: <br>
        <input id="nome" type="text" name="nome"><br><br>
        Sobrenome: <br>
        <input id="sobrenome" type="text" name="sobrenome"><br><br>
        E-mail: <br>
        <input id="email" type="text" name="email"><br><br>
        Senha: <br>
        <input id="senha" type="password" name="senha"><br><br>
        <input type="submit" value="Cadastrar" onclick="validaCampos()">
    </form>

    <?php
    $nome = addslashes($_POST["nome"]);
    $sobrenome = addslashes($_POST["sobrenome"]);
    $email = addslashes($_POST["email"]);
    $senha = addslashes($_POST["senha"]);

    if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
        $nome = addslashes($_POST["nome"]);
        $nome = strtoupper($nome);
        if (isset($_POST["sobrenome"]) && !empty($_POST["sobrenome"])) {
            $sobrenome = addslashes($_POST["sobrenome"]);
            $sobrenome = strtoupper($sobrenome);
            if (isset($_POST["email"]) && !empty($_POST["email"])) {
                $email = addslashes($_POST["email"]);
                if (isset($_POST["senha"]) && !empty($_POST["senha"])) {
                    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
                    $valido = true;
                }
            }
        }
    }

    if ($valido) {
        try {
            if (!empty($email)) {
                $sqlCommand = "SELECT * FROM usuario WHERE email = '$email';";
                $sqlCommand = $pdo->query($sqlCommand);
                if ($sqlCommand->rowCount() > 0) {
                    echo "Usuário já existe no sistema....<br><br>";
                } else {
                    $sqlCommand = "START TRANSACTION;";
                    $sqlCommand = $pdo->query($sqlCommand);
                    $sqlCommand = "INSERT INTO usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha';";
                    $sqlCommand = $pdo->query($sqlCommand);
                    $sqlCommand = "SELECT * FROM usuario WHERE email = '$email';";
                    $sqlCommand = $pdo->query($sqlCommand);

                    if ($sqlCommand->rowCount() != 1) {
                        $sqlCommand = "ROLLBACK;";
                        $sqlCommand = $pdo->query($sqlCommand);
                        echo "Erro ao inserir o usuário<br><br> ";
                    } else {
                        $sqlCommand = "COMMIT;";
                        $sqlCommand = $pdo->query($sqlCommand);
                        echo "Usuário cadastrado com sucesso<br><br>";
                        header("Location: usuario.php");
                    }
                }
            }
        } catch (PDOException $e) {
            echo "Erro ao inserir usuário<br>";
            $e->getMessage();
        }
    }


    ?>
    <script src="script.js"></script>
</body>

</html>