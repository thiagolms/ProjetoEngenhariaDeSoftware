<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Tela de Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="X-UA-Compatible" content="pt_br" />

    <!-- diretorio do CSS (Mudar para functions.php) -->

    <link rel="stylesheet" href="CSS/style.css">

</head>

<body class="fundo">
    <form method="POST" class="form" action="logar.php">
        <div class="campo">
            <div class="campo-top">
                <!-- imagem e titulo -->
                <img class="imgUser" src="img/user.png " alt="">
                <h2 class="titulo"> Tela de Login </h2>
                <!-- <p> Gerenciador ADM</p> -->
            </div>
            <!--  Email -->
            <div class="campo-login email">
                <label> Email*:</label>
                <input type="email" name="email" placeholder="Digite seu Email" required>
            </div>
            <!-- Senha -->
            <div class="campo-login">
                <label> Senha*:</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" required>
            </div>
            <!-- Lembrar Senha do usuário -->
            <div class="campo-login">
                <label><input type="checkbox"> Lembrar senha?</label>
            </div>
            <div class="campo-login">
            <button class="botaoEntrar" type="submit" value="ACESSAR" > Acessar </button> 
            </div>            
    </form>


</body>

</html>