<?php
$nome1 = "Brenda";
$nome2 = "Bruno";
$nome3 = "Cássio";
$nome4 = "Diego";
$nome5 = "Elias";
$idade = 1;
$media = 5.37;
$nomeURL = $_GET["nome"];
// preenchendo a url com o parâmetro nome e um valor conseguimos pegar o dado pela url
// https://localhost/3daw/ex02.php?nome=Roberto
// $nomeURL vai ser preenchido com Roberto

$nomes = array("Brenda", "Bruno", "Cássio", "Diego", "Elias");
$emails = array("aluno1@email.com", "aluno2@email.com", "aluno3@email.com", "aluno4@email.com", "aluno5@email.com");
$medias = array(7.3, 5.4, 9.0, 8.5, 8.0);

echo " > tipo de dado de nome1 " . var_dump($nome1) . "<br>";
echo " > tipo de dado de nome2 " . var_dump($nome2) . "<br>";
echo " > tipo de dado de nome3 " . var_dump($nome3) . "<br>";
echo " > tipo de dado de nome4 " . var_dump($nome4) . "<br>";
echo " > tipo de dado de nome5 " . var_dump($nome5) . "<br>";
echo " > tipo de dado de idade " . var_dump($idade) . "<br>";
echo " > tipo de dado de medida " . var_dump($media) . "<br>";
echo " > nome vindo da url: " . $nomeURL . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>aula 15 de setembro de 2021;</h1>
    <?php
    $email = $_GET["email"];
    echo "E-mail recebido de : " . $email;
    ?>

    <table>
        <tr>
            <th style="width: 200px; text-align:center;">nome</th>
            <th style="width: 200px; text-align:center;">email</th>
            <th style="width: 200px; text-align:center;">media</th>
        </tr>
        <tr>
            <!-- maneira 1 -->
            <td style="width: 200px; text-align:center;"><?php echo $nome1?></td>
            <td style="width: 200px; text-align:center;"><?php echo $email?></td>
            <td style="width: 200px; text-align:center;"><?php echo $media?></td>
        </tr>
        <tr>
            <!-- maneira 2 -->
            <?php
            echo "<td style=\"width: 200px; text-align:center;\">$nome1</td>";
            echo "<td style=\"width: 200px; text-align:center;\">$email</td>";
            echo "<td style=\"width: 200px; text-align:center;\">$media</td>";
            ?>
        </tr>
        <tr>
            <!-- maneira 3 -->
            <?php
            echo "<td style=\"width: 200px; text-align:center;\">$nome1</td><td style=\"width: 200px; text-align:center;\">$email</td><td style=\"width: 200px; text-align:center;\">$media</td>";
            ?>
        </tr>
        <?php
            
            for($i = 0; $i < 5; $i++){
                echo "<tr><td style=\"width: 200px; text-align:center;\">$nomes[$i]</td><td style=\"width: 200px; text-align:center;\">$emails[$i]</td><td style=\"width: 200px; text-align:center;\">$medias[$i]</td></tr>";
            }

            for($i = 0; $i < 5; $i++){
                echo "<tr>";
                    echo "<td style=\"width: 200px; text-align:center;\">$nomes[$i]</td>";
                    echo "<td style=\"width: 200px; text-align:center;\">$emails[$i]</td>";
                    echo "<td style=\"width: 200px; text-align:center;\">$medias[$i]</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>

</html>