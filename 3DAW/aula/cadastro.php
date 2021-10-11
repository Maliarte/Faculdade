<?php
$valido = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            if (isset($_POST['idade']) && !empty($_POST['idade'])) {
                $idade = addslashes($_POST['idade']);
                if (isset($_POST['endereco']) && !empty($_POST['endereco'])) {
                    $endereco = addslashes($_POST['endereco']);
                    $valido = true;
                }
            }
        }
    }
} 

if ($valido) {
    echo "<h1 style='text-align:center'>Retorno do POST</h1>
    <table style='width: 50%; margin: 0 auto; background:#ffa500; border-radius: 3px'>
        <tr style='background:#e0ffff'>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Idade</th>
            <th>Endereço</th>
        </tr>
        <tr style='text-align: center'>
            <td>" . $nome . "</td>
            <td>" . $email . "</td>
            <td>" . $idade . "</td>
            <td>" . $endereco . "</td>
        </tr>
    </table>";
}

?>
