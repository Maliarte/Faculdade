<?php
require "config.php";
$display = "none";

$id = addslashes($_GET['id']);
if (isset($id) && !empty($id)) {
    $sql = "SELECT * FROM usuario WHERE id = '$id';";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() == 1) {
        $usuario = $sql->fetch();
    }
}

$nome = $usuario['nome'];
$sobrenome = $usuario['sobrenome'];
$email = $usuario['email'];
if (isset($_POST['senha']) && !empty($_POST['senha'])) {
    $nome = addslashes($_POST['nome']);
    $sobrenome = addslashes($_POST['sobrenome']);
    $email = addslashes($_POST['email']);
    $senha = password_hash(addslashes($_POST['senha']), PASSWORD_DEFAULT);

    $sql = "START TRANSACTION;";
    $sql = $pdo->query($sql);
    $sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha' WHERE id = '$id';";
    $sql = $pdo->query($sql);
    $sql = "SELECT * FROM usuario WHERE nome = '$nome' and sobrenome = '$sobrenome' and email = '$email' and senha = '$senha' and id = '$id';";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() == 1) {
        $sql = "COMMIT;";
        $sql = $pdo->query($sql);
        echo "<script>alert('Usuário alterado com sucesso.')</script>";
        
    } else {
        $sql = "ROLLBACK;";
        $sql = $pdo->query($sql);
        echo "<script>alert('Usuário não alterado.')</script>";
    }
    $display = "block";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="./style.css">
    
</head>

<body>
    <h1>Editar usuario</h1>

    <form class="cadastrar" action="" method="POST">
        Nome: <br>
        <input id="nome" type="text" name="nome" value="<?php echo $nome ?>"><br><br>
        Sobrenome: <br>
        <input id="sobrenome" type="text" name="sobrenome" value="<?php echo $sobrenome ?>"><br><br>
        E-mail: <br>
        <input id="email" type="text" name="email" value="<?php echo $email ?>"><br><br>
        Senha: <br>
        <input id="senha" type="text" name="senha"><br><br>
        <input type="submit" value="Editar" onclick="validaCampos()">
    </form>
    <a href="usuario.php"><button style="margin: 5px auto; display:<?php echo $display; ?>;">Voltar</button></a>
    
    <script src="script.js"></script>
</body>

</html>

