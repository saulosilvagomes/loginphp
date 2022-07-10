<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
        // IMPORTA PÁGINA QUE VALIDA LOGIN
        require "checagem.php";
        if(isset($falhou)){
            echo("<script>alert('Login ou Senha inválidos!')</script>");
        }
    ?>
    <div class="loginbox">
        <img src="img/images.png" class="avatar">
        <h1>Faça seu Login</h1>
        <form method="post">
            <p>Usuário:</p>
            <input type="text" name="usuario" placeholder="Digite seu usuario"/>
            <p>Senha:</p>
            <input type="password" name="senha" placeholder="Digite sua senha"/>

            <input type="submit" value="login"/>

        </form>
    </div>
    
</body>
</html>