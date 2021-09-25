<?php
$nome = "Gilmar";
echo $nome."<br><br>";
echo "Com a criptografia md5() não se pode retornar ao valor original. É irreversível<br><br>";

$nome2 = md5($nome);
echo "Nome original: ".$nome."<br>";
echo "Nome criptografado: ".$nome2."<br><br>";

echo "Com a criptografia base64_encode() se pode retornar ao valor original. É reversível<br><br>";

$nome3 = base64_encode($nome);
echo "Nome original: ".$nome."<br>";
echo "Nome criptografado: ".$nome3."<br>";
$nome4 = base64_decode($nome3);
echo "Nome descriptografado: ".$nome4."<br>";
?>