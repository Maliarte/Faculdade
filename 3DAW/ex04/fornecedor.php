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
        <a href="AdicionarFornecedor.php">
            <button class="button add">Adicionar</button>
        </a>

        <table>
            <tr>
                <th>Nome Fantasia</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Ação</th>
            </tr>
            <?php
            require "ListaFornecedor.php"
            ?>
        </table>
    </div>
</body>

</html>