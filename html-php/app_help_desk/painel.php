<?php
require_once ("login.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    
    </style>
  </head>

  <body>

  <nav class="navbar navbar-light bg-light border-bottom border-secondary">
      <a class="navbar-brand" href="#">
        <img src="./assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          App Help Desk
      </a>
      <button onclick="location.href='logoff.php'" class="btn btn-danger text-white" type="button">Sair</button>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="./assets/img/formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="./assets/img/formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>