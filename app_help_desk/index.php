<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <di
    
    
    v class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                </div>
                
                <!-- Exibir a mensagem de erro caso o login for errado. -->
                <?php if (isset($_GET['login'])) { ?>
                  <!-- Mensagem de erro 1 -->
                  <?php if ($_GET['login'] == 'erro') { ?>
                    <div class="text-danger">
                      Login ou senha inválido(s), tente novamente.
                    </div>
                  <?php } ?>

                  <!-- Mensagem de erro 2 -->
                  <?php if ($_GET['login'] == 'erro2') { ?>
                    <div class="text-danger">
                      Faça a autenticação primeiro.
                    </div>
                  <?php } ?>
                <?php } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>