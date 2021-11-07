<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente</title>

    <style>
        * {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border: 1px solid #000;
            margin: 20px auto;
        }

        tr {
            background-color: #edf5fa;
        }

        td {
            padding: 2px 5px;
            text-align: center;
            font-size: small;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .add_btn {
            display: block;
            margin: 10px auto;
            background-color: #93c9e5;
            border: none;
            padding: 5px 8px;
        }

        .add_btn:hover {
            background-color: #6eb2d4;
            cursor: pointer;
        }

        .edit_btn {
            display: inline-block;
            margin-bottom: 10px;
            background-color: #fbec5d;
            border: none;
            padding: 5px 8px;
            margin-right: 5px;
        }

        .edit_btn:hover {
            background-color: #fada5e;
            cursor: pointer;
        }

        .del_btn {
            display: inline-block;
            margin-bottom: 10px;
            background-color: #fb8668;
            border: none;
            padding: 5px 8px;
        }

        .del_btn:hover {
            background-color: #e05936;
            cursor: pointer;
        }

        .return_btn {
            display: block;
            margin: 10px auto;
            background-color: #93c9e5;
            border: none;
            padding: 5px 8px;
        }

        .cadastrar {
            width: 40%;
        }

        .cadastrar td {
            text-align: left;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Pacientes</h1>
    <?php
    require "dados.php";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "<div class='container'>";
        echo "<table>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Responsável</th>
                <th>Clínica</th>
                <th>Ação</th>
            </tr>";
        if (file_exists($csv)) {
            $output = fopen($csv, 'r');

            while (list($id, $nome, $nascimento, $cpf, $telefone, $responsavel, $clinica) = fgetcsv($output, 1024, ',')) {
                echo "<tr>";
                echo "<td>" . strtoupper($nome) . "</td>";
                echo "<td>$nascimento</td>";
                echo "<td>$cpf</td>";
                echo "<td>$telefone</td>";
                echo "<td>" . strtoupper($responsavel) . "</td>";
                echo "<td>" . strtoupper($clinica) . "</td>";
                echo "<td>
                            <a href='editar_paciente.php?id=" . $id . "'><button class='edit_btn'>Editar</button></a>
                            <a href='apagar_paciente.php?id=" . $id . "'><button class='del_btn'>Apagar</button></a>
                         </td>";
                echo "</tr>";
            }
            fclose($output);
        }
        echo "</table>";
        echo "</div>";

        echo "<hr>";

        echo "<div class='container'>
        <form action='' method='post'>
            <table class='cadastrar'>
                <tr>
                    <td>Nome: </td>
                    <td><input type='text' name='nome' id='nome' size='30' required></td>
                </tr>
                <tr>
                    <td>Nascimento: </td>
                    <td><input type='date' name='nascimento' id='' pplaceholder='dd-mm-yyyy' required></td>
                </tr>
                <tr>
                    <td>CPF: </td>
                    <td><input type='text' name='cpf' id='' size='30' required></td>
                </tr>
                <tr>
                    <td>Telefone: </td>
                    <td><input type='tel' name='telefone' id='' size='30'></td>
                </tr>
                <tr>
                    <td>Responsável: </td>
                    <td><input type='text' name='responsavel' id='' size='30'></td>
                </tr>
                <tr>
                    <td>Clínica: </td>
                    <td>
                        <select name='clinica' id=''>
                            <option value='clínica geral'>Clínica Geral</option>
                            <option value='dermatologia'>Dermatologia</option>
                            <option value='endocrinologia'>Endocrinologia</option>
                            <option value='gastroenterologia'>Gastroenterologia</option>
                            <option value='ginecologia'>Ginecologia</option>
                            <option value='oftalmologia'>Oftalmologia</option>
                            <option value='ortopedia'>Ortopedia</option>
                            <option value='urologia'>Urologia</option>
                            <option value='nutricao'>Nutrição</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input class='add_btn' type='submit' value='Adicionar Paciente'>
        </form>
    </div>";
        echo "<hr>";
    }
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = strtolower($_POST['nome']);
        $responsavel = strtolower($_POST['responsavel']);
        $clinica = strtolower($_POST['clinica']);
        $id = time() * rand(1, 9);
        $linha = array(
            $id,
            $nome,
            $_POST['nascimento'],
            $_POST['cpf'],
            $_POST['telefone'],
            $responsavel,
            $clinica
        );
        if (file_exists($csv)) {
            $output = fopen($csv, 'a');
            fputcsv($output, $linha);
            fclose($output);
            echo "<p class='center'>paciente inserido com sucesso</p>";
        } else {
            $output = fopen($csv, 'w');
            fputcsv($output, $linha);
            fclose($output);
            echo "<p class='center'>paciente inserido com sucesso</p>";
        }
        echo "<a href='paciente.php'><button class='return_btn'>Voltar</button></a>";
    }
    ?>

</body>

</html>