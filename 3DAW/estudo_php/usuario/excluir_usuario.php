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
                echo "Usuário apagado com sucesso.";
            } else {
                $sql = "ROLLBACK;";
                $sql = $pdo->query($sql);
                echo "Ops! Aconteceu algum erro ao apagar o usuário.";
            }
        } catch (PDOException $e) {
            echo "Erro! Usuário não pode ser apagado.<br>";
            echo $e->getMessage();
        }
    }
    header("login.php");
}
