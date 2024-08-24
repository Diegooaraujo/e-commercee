<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="fundo" >

  </div>
  <div class="content">
    <div class="left">
      <img src="img/background.jpg" alt="">
    </div>
    <div class="right">
      <div class="container">
        <div class="buttonsForm">
          <div class="btnColor"></div>
          <button id="btnSignin">Sign in</button>
          <button id="btnSignup">Sign up</button>
        </div>
    
        <form id="signin">
          
          <div class="conteiner-form">
            <h1>Olá! faça login</h1>
            <p>Entre com seu e-mail</p>
            <input type="text" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" placeholder="Password" required />
            <i class="fas fa-lock iPassword"></i>
            
            <button type="submit">Sign in</button>
          </div>
        </form>
    
        <form id="signup">
          <div class="conteiner-form">
            <h1>Criar Conta</h1>
            <p>Comece sua jornada conosco</p>
            <input type="text" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" placeholder="Password" required />
            <i class="fas fa-lock iPassword"></i>
            <input type="password" placeholder="Password" required />
            <i class="fas fa-lock iPassword2"></i>
            <button type="submit">Sign up</button>
          </div>
        </form>
      </div>
    </div>

  </div>

  <script src="login.js"></script>
</body>
</html>