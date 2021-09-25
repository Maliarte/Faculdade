<?php
session_start();
// Sessão deve ser a primeira linha do código php
// Sessão fica salva no servidor. Só em linguagem server side
// Javascript, como roda no browser e não no servidor, não aceita sessão

// Variável global do php _SESSION[]
//$_SESSION["teste"] = "Gilmar Santana";

//echo "Sessão iniciada...";
// O valor com a chave definida na variável sessão vai perdurar enquanto o navegador estiver aberto
// Depois desse valor definido, ele poderá ser usado em qualquer lugar do código
// Também admite array
// $_SESSION["teste"] = array(
//     "chave1" => "valor1",
//     "chave2" => "valor2",
//     "chave3" => "valor3",
//     "chave4" => "valor4"
// )

echo "Meu nome é ".$_SESSION["teste"];

?>