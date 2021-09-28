<?php
function somarNumero($num1, $num2)
{
    return $num1 + $num2;
}

$resultado = somarNumero(6, 10);
echo "Resultado: " . $resultado;
echo "<br>";

echo "<br><br>\*\*\*\*\*\*\*\* Funções de Data */*/*/*/*/*/*/*/*/*/<br><br><br>";

// \à\s usando caractere de escape para o php interpretar como texto literal
$diaDeHoje = date("j/F/Y \à\s H/i:s");
echo $diaDeHoje;
echo "<br><br>";

$tempo = time();
echo "A função time() retorna a quantidade de segundos desde 1/1/1970 00:00:00<br>" . $tempo . "<br><br>";

$verificaData = mktime(17, 30, 00, 05, 28, 1979);
echo "<br>A função mktime() retorna os segundo com base em uma determinada data<br><br>";
echo "Com base na data 28/05/1979 às 17:30:00 tenho como resultado: " . $verificaData . " segundos<br><br>";

echo "A função strtotime() me retorna segundos com base em uma referência dada. É muito útil para manipulação de datas, junto com a mktime().<br><br>";
echo "Hoje: " . strtotime("now") . "<br><br>";
echo "Dia 10 de setembro de 2000: " . strtotime("10 September 2000") . "<br><br>";
echo "Hoje mais 1 dia: " . strtotime("+1 day") . "<br><br>";
echo "Hoje mais 1 semana: " . strtotime("+1 week") . "<br><br>";
echo "Hoje mais 1 semana, 2 dias, 4 horas e 2 segundos: " . strtotime("+1 week 2 days 4 hours 2 seconds") . "<br><br>";
echo "Próxima quinta-feira: " . strtotime("next Thursday") . "<br><br>";
echo "Última segunda-feira: " . strtotime("last Monday") . "<br><br>";

$dataProxima = date("d/m/Y", strtotime("+ 5 days"));
echo "Data daqui a 5 dias: " . $dataProxima . "<br><br>";

$dataProxima = date("d/m/Y", 0);
echo "Data zero: " . $dataProxima . "<br><br>";

$dataProxima = date("d/m/Y", strtotime("+ 5 days", 0));
echo "Data daqui a 5 dias após o marco zero: " . $dataProxima . "<br><br>";

$dataProxima = date("d/m/Y", strtotime("+ 10 days", mktime(0,0,0,5,28,1979)));
echo "Data 10 dias após 28 de maio de 1979: " . $dataProxima . "<br><br>";


echo "<br><br>\*\*\*\*\*\*\*\* Funções matemáticas */*/*/*/*/*/*/*/*/*/<br><br><br>";

echo "Absoluto de 5,3: " . abs(5.3) . "<br><br>";
echo "Absoluto de 7: " . abs(7) . "<br><br>";
echo "Absoluto de -11: " . abs(-11) . "<br><br>";
echo "Absoluto de -2,979: " . abs(-2.979) . "<br><br>";

echo "Arredondamento de 2,3: " . round(2.3) . "<br><br>";
echo "Arredondamento de -2,979: " . round(-2.979) . "<br><br>";
echo "Arredondamento de 11,45: " . round(11.45) . "<br><br>";
echo "Arredondamento de 11,49: " . round(11.49) . "<br><br>";
echo "Arredondamento de 11,50: " . round(11.50) . "<br><br>";

echo "Arredondamento pra cima de 11,03: " . ceil(11.03) . "<br><br>";
echo "Arredondamento pra cima de 11,5: " . ceil(11.5) . "<br><br>";
echo "Arredondamento pra cima de 11,722: " . ceil(11.722) . "<br><br>";
echo "Arredondamento pra cima de 11,001: " . ceil(11.001) . "<br><br>";
echo "Arredondamento pra cima de 11,00001: " . ceil(11.00001) . "<br><br>";
echo "Arredondamento pra cima de 11,000007: " . ceil(11.000007) . "<br><br>";

echo "Arredondamento pra baixo de 11,03: " . floor(11.03) . "<br><br>";
echo "Arredondamento pra baixo de 11,5: " . floor(11.5) . "<br><br>";
echo "Arredondamento pra baixo de 11,722: " . floor(11.722) . "<br><br>";
echo "Arredondamento pra baixo de 11,001: " . floor(11.001) . "<br><br>";
echo "Arredondamento pra baixo de 11,00001: " . floor(11.00001) . "<br><br>";
echo "Arredondamento pra baixo de 11,999999: " . floor(11.999999) . "<br><br>";

echo "Aleatório entre 1 (inclusive) e 9 (inclusive): " . rand(1, 9) . "<br><br>";

// Criar um sorteio aleatório com base em um array de nomes

$nomes = array("Sandra", "Maycon", "Carlos Antonio", "Miguel");

echo "O sorteado foi: " . $nomes[rand(0,3)] . "<br><br>";

?>