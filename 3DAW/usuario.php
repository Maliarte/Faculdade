<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>

    <link rel="stylesheet" href="./style.css">

</head>

<body>


    <h1>Lista de usuários</h1>
    <div class="inserir">
        <a href="adicionar_usuario.php"><button class="btn-adicionar">Adicionar</button></a>
    </div>
    <table class="tabela-principal">
        <tr>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>E-MAIL</th>
            <th>AÇÃO</th>
        </tr>

        <?php
        require "processaUsuario.php";
        ?>
    </table>

</body>

</html>