<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;
?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Tela de cadastro da Secretaria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="X-UA-Compatible" content="pt_br" />

    <!-- diretorio do CSS (Mudar para functions.php) -->

    <link rel="stylesheet" href="CSS/style-cadastro.css">

</head>

<body class="fundo-cadastroSecret">

    <!-- <div class="box">    
</div> -->
    <form class="form" action="">
        <div class="campo">
            <div class="campo-top">
                <p> Área restrita ao Administrador</p>
                <h2 class="titulo"> Cadastrar Secretaria(o) do CAUAE </h2>
            </div>

            <!-- NOME DA SECRETARIA -->
            <div class="campo-cadastro">
                <label for="name"> Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome completo" class="nomeSecret" required maxlength="40">
            </div>
            <!-- CPF DA SECRETARIA -->
            <div class="campo-cadastro">
                <label for="rg"> CPF: </label>
                <input type="cpf" name="cpf" id="cpf" class="cpfSecret" placeholder="Digite o CPF (Apenas números)" maxlength="11" required>
            </div>
            <!-- RG DA SECRETARIA -->
            <div class="campo-cadastro">
                <label for="rg"> RG: </label>
                <input type="rg" name="rg" id="rg" class="rgSecret" placeholder="Digite o RG (Apenas números)" maxlength="9" required>
            </div>
            <!-- EMAIL DA SECRETARIA -->
            <div class="campo-cadastro">
                <label for="email"> Email: </label>
                <input type="email" name="email" id="email" class="emailSecret" placeholder="Digite seu Email" maxlength="40" required>
            </div>
            <!-- SENHA PARA SECRETARIA -->
            <div class="campo-cadastro">
                <label for="password"> Senha: </label>
                <input type="password" name="senha" id="senha" class="senhaSecret" placeholder="Digite uma senha" maxlength="15" required>
            </div>
            <div class="campo-cadastro">
                <label for="password"> Confirme sua Senha: </label>
                <input type="password" name="confSenha" id="senha" class="senhaSecret" placeholder="Digite a mesma senha" maxlength="15" required>
            </div>
            <!-- QUAL O SENHA DA SECRETARIA -->
            <!-- <p> Sexo:</p>
            <input class="sexo" type="radio" name="genero" value="faminino" id="feminino" required>
            <label for="feminino"> Feminino</label>

            <input type="radio" name="genero" value="masculino" id="masculino" required>
            <label for="masculino"> Masculino</label>

            <input type="radio" name="genero" value="outro" id="outro" required>
            <label for="outro"> Outro</label> -->
            <!-- DATA DE NASCIMENTO DA SECRETARIA -->

            <!-- <div class="campo-cadastro">
                <br>
                <label for="data_nascimento"><b> Data de Nascimento:</b> </label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="datNascSecret" required>
            </div> -->
            <!-- BOTÃO PARA CADASTRAR SECRETARIA -->
            <div class="campo-cadastro">
                <button class="botaoCadastrar" type="submit"> Cadastrar Secretaria(o) </button>
            </div>


        </div>
    </form>

<?php
//verificar se cliclou no botão
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $cpf = addslashes($_POST['cpf']);
    $rg = addslashes($_POST['rg']);
    $senha = addslashes($_POST['senha']);
    $confSenha = addslashes($_POST['confSenha']);
    //verificar se está preenchido
    if(!empty($nome) && !empty(email) && !empty(cpf) && !empty(rg) && !empty(senha) && !empty(confSenha))
    {
        $u->conectar("login", "localhost", "root", "");
        if($u->msgERRO == "") //sem erros
        {
            if($senha == $confSenha)
            {
                if($u->cadastrar($nome,$email,$cpf,$rg,$senha))
                {
                    echo "Usuário cadastrado com sucesso!"

                }
                else
                {
                    echo "Email já cadastrado!"
                }

            }
            else
            {
                echo "Senha e Confirmar Senha precisa ser iguais."
            }

        }
        else{
            echo "Erro: ".$u->msgERRO;
        }
    } else
    {
        echo "Preencha todos os campos!"
    }
}

?>
</body>

</html>