<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lazzy - Cadastro</title>
        <link rel="stylesheet" href="../../../Style/pc/pages/LoginCadastro/cadastro.css">
    </head>
    <body>
        <section>
            <form action="../../db/registro/RegistroUsuario.php" method="post" class="formulario_cadastro" onsubmit="senhaOk();">
                <main>
                    <label for="nome">Nome: </label><br>
                    <input type="text" name="nome" id="nome"><br>
                    <label for="sobre_nome">Sobrenome: </label><br>
                    <input type="text" name="sobrenome" id="sobre_nome"><br>
                    <label for="email">E-mail: </label><br>
                    <input type="text" name="email" id="email"><br>
                    <input type="submit" value="Cadastrar" class="botao_cadastrar" id="botao_cadastrar">
                </main>
                <main>
                    <label for="celular">Celular: </label><br>
                    <input type="text" name="celular" id="celular"><br>
                    <label for="senha">Senha:</label><br>
                    <input type="password" name="senha" id="senha"><br>
                    <label for="senha">Verificar senha:</label><br>
                    <input type="password" name="verificar_senha" id="verificar_senha">
                </main>
            </form>
        </section>
    </body>
    <script src="../../../JavaScript/validar_senha.js"></script>
</html>
