<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "gilmar";
$dbsenha = "senha.123";

try {
    $pdo = new PDO($dsn, $dbuser, $dbsenha);
    echo "Conectado com sucesso<br>";
    $sqlCommand = "select * from posts where ;";
    $sqlCommand = $pdo->query($sqlCommand);

    if($sqlCommand->rowCount() > 0){
        echo $sqlCommand->rowCount()." resultados encontrados<br><br>";
        foreach($sqlCommand->fetchAll() as $artigo){
            echo "Id: ".$artigo["id"]."<br>";
            echo "Título: ".$artigo["titulo"]."<br>";
            echo "Data de criação: ".$artigo["data_criado"]."<br>";
            echo "Texto: ".$artigo["corpo"]."<br>";
            echo "Autor: ".$artigo["autor"]."<br>";
            echo "<hr>";
        }
    }else{
        echo "Não há resultados<br>";
    }

} catch (PDOException $e) {
    echo "Erro:<br>".$e->getMessage();
}

?>