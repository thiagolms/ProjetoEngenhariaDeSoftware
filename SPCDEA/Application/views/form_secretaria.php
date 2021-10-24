<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela de cadastro da Secretaria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="X-UA-Compatible" content="pt_br" />
    <!-- diretório do CSS (Mudar para functions.php) -->
    <link rel="stylesheet" href="stylesheets/cadastro.css">
</head>
<body class="fundo-cadastroSecret">
<form method="POST" action="../controllers/insere.php" class="form">
    <div class="campo">
        <div class="campo-top">
            <h2 class="titulo"> Cadastrar Secretaria(o) do CAUAE </h2>
        </div>
        <!-- NOME DA SECRETARIA -->
        <div class="campo-cadastro">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome completo" class="nomeSecret" required maxlength="30">
        </div>
        <!-- EMAIL DA SECRETARIA -->
        <div class="campo-cadastro">
            <label for="email"> Email:</label>
            <input type="email" name="email" id="email" class="emailSecret" placeholder="Digite seu Email" maxlength="40" required>
        </div>
        <!-- SENHA PARA SECRETARIA -->
        <div class="campo-cadastro">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="senhaSecret" placeholder="Digite uma senha" maxlength="15" required>
        </div>
        <!-- BOTÃO PARA CADASTRAR SECRETARIA -->
        <div class="campo-cadastro">
            <button class="botaoCadastrar" type="submit"> Cadastrar Secretaria(o) </button>
        </div>
    </div>
</form>
</body>
</html>