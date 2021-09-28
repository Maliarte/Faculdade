<?php
$pessoa = array(
    "nome" => "Gilmar",
    "idade" => 42,
    "cidade" => "São Gonçalo",
    "estado" => "RJ",
    "profissao" => "programador"
);

echo "array_keys() retorna a chave de um array<br><br>";
$array2 = array_keys($pessoa);
print_r($array2);

echo "<br><br>array_values() retorna o valor de um array<br><br>";
$array3 = array_values($pessoa);
print_r($array3);

echo "<br><br>array_pop() remove o último item do array<br><br>";
print_r($pessoa);
echo "<br>";
$array4 = array_pop($pessoa);
print_r($pessoa);
echo "<br>";
print_r($array4);

echo "<br><br>array_shift() remove o primeiro item do array<br><br>";
print_r($pessoa);
echo "<br>";
$array5 = array_shift($pessoa);
print_r($pessoa);
echo "<br>";
print_r($array5);

echo "<br><br>asort() Ordena um array em ordem alfabética dos valores mantendo a associação entre índices e valores<br><br>";
print_r($pessoa);
echo "<br>";
$array6 = asort($pessoa);
print_r($pessoa);
echo "<br>";
print_r($array6);

echo "<br><br>arsort() Ordena um array em ordem alfabética reversa dos valores mantendo a associação entre índices e valores<br><br>";
print_r($pessoa);
echo "<br>";
$array7 = arsort($pessoa);
print_r($pessoa);
echo "<br>";
print_r($array7);

echo "<br><br>count() Quantifica os elementos de um array<br><br>";
print_r($pessoa);
echo "<br>";
echo "Total de elementos: ".count($pessoa);

echo "<br><br>in_array() Retorna true ou false se um elemento está ou não em um array<br>";
if(in_array("São Gonçalo", $pessoa)){
    echo "O array 'pessoa' contém o valor 'São Gonçalo'<br><br>";
}


?>  