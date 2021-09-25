<?php
//setcookie(chave, valor, tempo que vai perdurar no navegador)
// no exemplo abaiuxo vai perdurar desde agora até mais 3600 segundos, ou seja, 1h

// setcookie("meuteste", "Fulano de tal", time()+3600);

// echo "cookie setado com sucesso";

// Depois de setado ...

echo "Meu cookie é de ".$_COOKIE["meuteste"];

?>