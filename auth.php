<?php
  require_once("templates/header.php");
?>

  <div id="main-container" class="container-fluid">
    <div class="col-md-12">
      <div class="row" id="auth-row">
        
        <div class="col-md-4" id="login-container">
          <h2>Entrar</h2>
          <form action="" method="post">
          <input type="hidden" name="type" value="login">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required
                class="form-control" placeholder="Digite seu e-mail">              
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" id="password" name="password" required
                class="form-control" placeholder="Digite sua senha">              
            </div>
            <input type="submit" value="Entrar" class="btn card-btn">
          </form>
        </div>

        <div class="col-md-4" id="register-container">
          <h2>Criar Conta</h2>
          <form action="" method="post">
            <input type="hidden" name="type" value="register">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required
                class="form-control" placeholder="Digite seu e-mail">              
            </div>
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" id="name" name="name" required
                class="form-control" placeholder="Digite seu nome">              
            </div>
            <div class="form-group">
              <label for="lastname">Sobrenome</label>
              <input type="text" id="lastname" name="lastname" required
                class="form-control" placeholder="Digite seu sobrenome">              
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" id="password" name="password" required
                class="form-control" placeholder="Digite sua senha">              
            </div>
            <div class="form-group">
              <label for="confpassword">confirme sua senha</label>
              <input type="password" id="confpassword" name="confpassword" required
                class="form-control" placeholder="Digite sua senha">              
            </div>
            <input type="submit" value="Registrar" class="btn card-btn">
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
  require_once("templates/footer.php");
?>