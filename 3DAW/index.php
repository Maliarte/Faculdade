<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>Arquivo index.php</h1>

    <!-- Forma 1 - Transferindo os dados para outro arquivo "recebedor.php" trocando de página -->
    <!-- <form method="POST" action="recebedor.php">
        Login<br>
        <input type="email" name="email"><br><br>
        Senha<br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Logar">
    </form> -->

    <!-- Forma 2 - Utilizando os dados arquivo "recebedor.php" sem trocar de página -->

    <div style="display: inline-block; width: 35%; border: 1px solid black; padding: 20px;">
        <h2>Acesse a plataforma</h2>
        <form method="POST">
            Login<br>
            <input type="email" name="login"><br><br>
            Senha<br>
            <input type="password" name="senha_login"><br><br>
            <input type="submit" value="Logar">
        </form>
    </div>

    <div style="display: inline-block; width: 35%; border: 1px solid black; padding: 20px;">
        <h2>Cadastre seus dados</h2>
        <form method="POST">
            Nome: <br>
            <input type="text" name="nome"><br><br>
            Sobrenome: <br>
            <input type="text" name="sobrenome"><br><br>
            E-mail: <br>
            <input type="email" name="email"><br><br>
            Senha: <br>
            <input type="password" name="senha"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <hr>
    <!-- 
        (3) diferentes maneiras para importar o arquivo php para a página.
        1 - require -> Caso encontre algum erro no script php o script será parado
        2 - require_once -> Importa o arquivo apenas uma vez em todo o documento 
        3 - include -> Exibe mensagem de erro mas não para o script php
    -->
    <?php
        $valid;
    ?>
    <div id="insere">
        <?php
        require "insereusuario.php";
        ?>
    </div>

    <div id="consulta">
        <?php
        require "consultausuario.php";
        ?>
    </div>

    <br>
</body>

</html>