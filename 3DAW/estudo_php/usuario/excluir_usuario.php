<?php

require 'config.php';
$id = addslashes($_GET["id"]);

if (isset($id) && !empty($id)) {
    $sql = "SELECT * FROM usuario WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() == 1) {
        try {
            $sql = "START TRANSACTION;";
            $sql = $pdo->query($sql);
            $sql = "DELETE FROM usuario WHERE id = '$id'";
            $sql = $pdo->query($sql);
            $sql = "SELECT * FROM usuario WHERE id = '$id'";
            $sql = $pdo->query($sql);
            if($sql->rowCount() == 0){
                $sql = "COMMIT;";
                $sql = $pdo->query($sql);
                echo "<h1 style='text-align:center'>Usuário apagado com sucesso</h1>";
                echo "<a href='usuario.php' style='text-decoration:none;'><button style='margin: 50px auto; display: block; text-decoration:none;'>Voltar</button></a>";
            } else {
                $sql = "ROLLBACK;";
                $sql = $pdo->query($sql);
                echo "<h1>Ops! Aconteceu algum erro ao apagar o usuário.</h1>";
                echo "<a href='usuario.php'><button style='margin: 5px auto;'>Voltar</button></a>";
            }
        } catch (PDOException $e) {
            echo "Erro! Usuário não pode ser apagado.<br>";
            echo $e->getMessage();
        }
    }
    header("login.php");
}
