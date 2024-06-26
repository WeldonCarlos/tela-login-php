<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>
  <div id="login-container">
    <h1>Login</h1>
    <form action="login.php"  method="POST">
      <label for="email">Usuário</label>
      <input type="text" name="usuario" id="email" placeholder="Digite seu e-mail" autocomplete="on">
      <label for="senha">Senha</label>
      <input type="password" name="senha" id="password" placeholder="Digite a sua senha">
      <a href="#" id="forgot-pass">Esqueceu a senha?</a>
      <input type="submit" value="Login">
    </form>
    <div id="social-container">
      <p>Ou entre pelas suas redes sociais</p>
      <i class="fa fa-facebook-f"></i>
      <i class="fa fa-linkedin"></i>
    </div>
    <div id="register-container">
      <p>Ainda não tem uma conta?</p>
      <a href="#">Registrar</a>
    </div>
  </div>
</body>
</html>