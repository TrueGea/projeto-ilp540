<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="Cadastro.css">
    <title>Cadastro</title>
</head>
<body>

    <div class="conteiner">
        <form class="needs-validation" novalidate>
            <div class="form-row">
                <label for="nome1">Nome: </label><br>
                    <input class="caixasinput form-control" type="text" id="nome1" name="nome" required>
                    <div class="invalid-feedback">
                        Por favor, Informe o Nome.
                    </div>
               <br>
               <br>
               <label for="sobrenome1">Sobrenome: </label><br>
                    <input class="caixasinput form-control" type="text" id="sobrenome1" name="sobrenome" required>
                    <div class="invalid-feedback">
                        Por favor, o sobrenome.
                    </div>
               <br>
               <br>
                <label for=dt_nascimento>Data de Nascimento: </label><br>
                    <input class="caixasinput form-control" type="date" id= "dt_nascimento" name="dtnascimento" required>
                    <div class="invalid-feedback">
                        Por favor, Informe a data de Nascimento corretamente.
                    </div>
                <br>
                <br>
                <label for=inputemail3>Email: </label><br>
                    <input class="caixasinput form-control" type= "email" id= "inputemail3" name= "email" required>
                    <div class="invalid-feedback">
                        Por favor, Informe o email valido.
                    </div>
                <br>
                <br>
                <label for="username1">Nome de Usuario</label><br>
                    <input class="caixasinput form-control" type="text" id="username1" name="Nome de Usuario" required>
                    <div class="invalid-feedback">
                        Por favor, Informe o Nome de Usuario.
                    </div>
                <br>
                <br>
                <label for="senha1">Senha: </label><br>
                    <input class="caixasinput form-control" type="password" id="senha1" name="Senha" required>
                    <div class="invalid-feedback">
                        Por favor, Informe uma senha valida.
                    </div>
                <br>
                <br>
            </div>
            <button class="botaocentro" type="submit" value="Cadastrar"> Cadastrar</button>

        </form>
    </div>
    <footer>
        <p> &copy; Direitos Reservados Gabriel Gea 2022</p>
    </footer>



    <script src="js/script.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
      
</body>
</html>