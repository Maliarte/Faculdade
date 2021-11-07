<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Paciente</title>

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
    <h1>Apagar Paciente</h1>
    <?php
    require "dados.php";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "<div class='container'>";
        echo "<form action='' method='post'>";
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
            $id = $_GET['id'];
            $output = fopen($csv, 'r');
            $temp = fopen("temp.csv", 'w');
            $tempPaciente = fopen("tempPaciente.csv", 'w');
            while (($data = fgetcsv($output, 1024)) != FALSE) {
                if (reset($data) == $id) {
                    fputcsv($tempPaciente, $data);
                    continue;
                }
                fputcsv($temp, $data);
            }
            fclose($temp);
            fclose($output);
            fclose($tempPaciente);
            //rename("temp.csv", "pacientes.csv");

            $output = fopen("tempPaciente.csv", 'r');

            while (list($id, $nome, $nascimento, $cpf, $telefone, $responsavel, $clinica) = fgetcsv($output, 1024, ',')) {

                echo "<tr>";
                echo "<td>" . strtoupper($nome) . "</td>";
                echo "<td>$nascimento</td>";
                echo "<td>$cpf</td>";
                echo "<td>$telefone</td>";
                echo "<td>" . strtoupper($responsavel) . "</td>";
                echo "<td>" . strtoupper($clinica) . "</td>";
                echo "<td><input class='del_btn' type='submit' value='Apagar Paciente'></td>";
                echo "</tr>";
            }
            fclose($output);
            echo "</table>";
            echo "</form>";
            echo "</div>";
        }
    }
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        unlink("tempPaciente.csv");
        unlink($csv);
        rename("temp.csv", $csv);
        echo "<p class='center'>paciente apagado com sucesso</p>";
        echo "<a href='paciente.php'><button class='return_btn'>Voltar</button></a>";
    }
    ?>

</body>

</html>