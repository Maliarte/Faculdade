<?php
    $emailCadastrado = "";
    $passwordCadastrado = "";
    $email = "";
    $password = "";

    if(isset($_POST['emailCadastardo']) && !empty($_POST['emailCadastrado'])){
        if(isset($_POST['passwordCadastrado']) && !empty($_POST['passwordCadastrado'])){
            $emailCadastrado = $_POST['emailCadastrado'];
            $passwordCadastrado = $_POST['passwordCadastrado'];
        }
    }


    if(isset($_POST['email']) && !empty($_POST['email'])){
        if(isset($_POST['password']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email == $emailCadastrado && $password == $passwordCadastrado){
                echo "Login Válido.";
            }else{
                echo "Login Incorreto.";
            }
            
        }
    }

    echo "<br>email: " . $email . "<br>";
    echo "password: " . $password . "<br>";
    echo "emailCadastrado: " . $emailCadastrado . "<br>";
    echo "passwordCadstrado: " . $passwordCadastrado . "<br>";

?>