<!DOCTYPE html>
<html>
<head>
    @include('lib.head');
    <link rel='stylesheet' type='text/css' href='/safe.gg/style/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/safe.gg/style/css/loginIndex.css'>
</head>
<body style="background-color:  #1d0149;">
  <div class="container">
    <div class="justify-content-center align-self-center col-md-12 row">
      <div class="login-form-1 animated fadeIn">
        <form id="register-form" class="text-left" action="/user/create" method="post" onsubmit="return validateFormSignUp();">
          {{ csrf_field() }}
          <img src="/images/icons/safe_gg-logo-nome-branco-versao-2.png">
          <div class="login-form-main-message"><h4 class="white-font line animated fadeIn">Cadastre-se</h4></div>
            <div class="main-login-form">
              <div class="login-group">
                <div class='form-group'>
                    <input type='text' class='form-control' id='user' name='username' placeholder='Usuário' value='{{$username}}' aria-describedby='feedback'>
                    <small id='feedback' class='form-text red-font' style='display:none;'>
                        <p class='red-font'><i class='fas fa-exclamation-circle'></i> O usuário já está sendo usado.</p>
                    </small>
                    </div>
                    <div class='form-group'>
                        <input type='text' class='form-control' id='nome' name='name' placeholder='Nome' value='{{$name}}'>
                    </div>
                    <div class='form-group'>
                        <input type='text' class='form-control' id='email' name='email' placeholder='Email' value='{{$email}}'>
                    </div>;
                <div class="form-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="nicklol" name="summonerName" placeholder="Nome de Invocador">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="steam" name="steam" placeholder="Steam">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" id="datanasc" name="birthday">
                </div>
              </div>
              <button type="submit" class="btn btn-block btn-light">Cadastrar</button>
              <button type="button" class="btn btn-block btn-outline-light" id="btn-back-home"><i class="fas fa-chevron-left"></i> Voltar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<!--COLOCAR ISSO EM UM ARQUIVO SEPARADO -->
<script type="text/javascript" src="/safe.gg/style/js/registerIndex.js"></script>
