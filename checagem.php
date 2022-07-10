<?php

    // DEFININDO USUARIOS MOCKADOS
    $usuarios = [
        "admin" => "123456",
        "saulo" => "1234"
    ];

    // DEFININDO SESSÃO 
    session_start();
    // VERIFICANDO LOGIN
    if(isset($_POST['usuario']) && !isset($_SESSION['usuario'])){
        if(array_key_exists($_POST['usuario'],$usuarios)){
            //VERIFICANDO SENHA
            if($usuarios[$_POST['usuario']] == $_POST['senha']){
                $_SESSION['usuario'] = $_POST['usuario'];
            }
        }
        // SE USUARIO OU SENHA ESTÃO ERRADOS
        if(!isset($_SESSION['usuario'])){
            $falhou = true;
        }
    }
    // SE A SENHA ESTIVER CORRETA, A SESSÃO FOI INICIADA
    if(isset($_SESSION['usuario'])){
        header("Location: index.php");
        exit();
    }

?>