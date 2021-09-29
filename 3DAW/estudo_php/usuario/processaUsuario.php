<?php
require 'config.php';

$sql = "SELECT * FROM usuario ORDER BY nome";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0){
    foreach ($sql->fetchAll() as $usuario) {
        echo "<tr>";
        echo "<td class='coluna-nome'>".$usuario['nome']."</td>";
        echo "<td class='coluna-sobrenome'>".$usuario['sobrenome']."</td>";
        echo "<td class='coluna-email'>".$usuario['email']."</td>";
        echo '<td class="coluna-acao">
                <a href="editar_usuario.php?id='.$usuario['id'].'">
                    <button class="btn-editar">Editar</button>
                </a>
                <a href="excluir_usuario.php?id='.$usuario['id'].'">
                    <button class="btn-excluir">Excluir</button>
                </a>
            </td>';
        echo "</tr>";
    }
}