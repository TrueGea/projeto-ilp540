<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="Login.css">

    <title>Template de login, usando Bootstrap.</title>
  </head>

  <body class="text-center">
    <div class="Conteiner">
        <form class="form-signin">
            <img id="imgLogin" src="dancingbook1.gif" alt="Gif Livro">
            <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
            <label for="inputEmail" class="sr-only">Endereço de email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Lembrar de mim
              </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          </form>
          </div>
    </div>
    <footer>
        <p> &copy; Direitos Reservados Gabriel Gea</p>
    </footer>
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
        <script src="js/popper.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>
