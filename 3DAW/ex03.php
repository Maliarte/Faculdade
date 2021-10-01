<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style='text-align:center'>Cadastro</h1>
    <form  style='width: 185px;margin: 0 auto;padding: 50px; background:#ffa500; border-radius:5px' method="POST">
        Nome:<br>
        <input type="text" name="nome" required><br><br>
        E-mail:<br>
        <input type="email" name="email" required><br><br>
        Idade:<br>
        <input type="text" name="idade" required><br><br>
        Endereço:<br>
        <input type="text" name="endereco" required><br><br>
        <input type="submit" value="Enviar">
    </form>

<?php
    require 'cadastro.php';
?>

</body>

</html>