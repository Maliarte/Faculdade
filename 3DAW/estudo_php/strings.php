<?php

$nome = "Gilmar Ribeiro Santana";
$divisoes = explode(" ", $nome);

foreach($divisoes as $divisao){
    echo $divisao . "<br>";
}

$nomeCompleto = implode(" ", $divisoes);
echo $nomeCompleto . "<br><br>";

$numeroFormatado = number_format(8.21123442234, 2);
echo $numeroFormatado . "<br><br>";

echo "Formatando o número escolhendo representar as milhares com ponto e a parte decimal com vírgula e duas casas decimais<br>";
echo number_format(55387.5446, 2, ",", ".") . "<br><br>";

echo "Formatando o número escolhendo representar as milhares com vírgula e a parte decimal com ponto e uma casa decimal<br>";
echo number_format(55387.5446, 1, ".", ",") . "<br><br>";

echo "Formatando o número escolhendo representar as milhares sem ponto e a parte decimal com vírgula e três casa decimais<br>";
echo number_format(55387.5446, 3, ",", "") . "<br><br>";

$texto = "O rato roeu a roupa";
echo $texto . "<br><br>";
$string = str_replace("roeu", "comeu", $texto);
echo $string . "<br><br>";

echo strtoupper($texto) . "<br><br>";
echo strtolower("MY NAME IS BOND") . "<br><br>";

$subS = substr($texto, 0, 5);
echo $subS . "<br><br>";


$nomeMinusculo = "andré";
$nomeMaiusculo = ucfirst($nomeMinusculo);
echo "Convertendo " . $nomeMinusculo . " para a primeira letra maiúscula<br>";
echo $nomeMaiusculo . "<br><br>";

$nomeMinusculo = "andré ferreira mendes";
$nomeMaiusculo = ucwords($nomeMinusculo);
echo "Convertendo " . $nomeMinusculo . " para a primeira letra maiúscula de cada palavra<br>";
echo $nomeMaiusculo . "<br><br>";
?>