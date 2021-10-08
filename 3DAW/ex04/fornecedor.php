<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body id="fornecedor">
    <div id="content">
        <h1>Fornecedores</h1>
        <button class="button add">Adicionar</button>
        <table>
            <tr>
                <th>Razão Social</th>
                <th>Nome Fantasial</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
            <?php
            require "listaUsuario.php"
            ?>
        </table>
    </div>
</body>
</html>