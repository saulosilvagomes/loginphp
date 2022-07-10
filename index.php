<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Bem Vindo!</h1>
    <form method="post">
        <input type="hidden" name="logout" value="1"/>
        <input type="submit" value="logout"/>
    </form>
</body>
</html>


<?php
    // PROTEGENDO PAGINA DE ACESSO NÃO AUTORIZADO
    session_start();
    // SE USUARIO SOLICITOU O LOGOUT
    if(isset($_POST['logout'])){
        unset($_SESSION['usuario']); //DESFAZ A SESSÃO
    }

    //  RETORNA PARA PAGINA DE LOGIN SE NÃO SE LOGOU
    if(!isset($_SESSION['usuario'])){
        header("Location: login.php");
        exit();
    }

    
?>
