<?php
$dbl = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "gilmar";
$dbpass = "senha.123";

try {
    $pdo = new PDO($dbl, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Falhou a conexão<br>".$e->getMessage();
}