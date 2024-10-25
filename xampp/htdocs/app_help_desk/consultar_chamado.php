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

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php
                $chamados = [];
                $arquivo = fopen("../../app_help_desk_hidden/registros/registro.csv" , "r");

                // Iterar sobre cada linha no arquivo csv procurando os campos.
                while (($data = fgetcsv($arquivo)) !== false) {
                  $titulo = $data[0];
                  $categoria = $data[1];
                  $descricao = $data[2];
                  
              ?>
                  <div class='card mb-3 bg-light'>
                    <div class='card-body'>
                      <h5 class='card-title'><?php echo $titulo; ?></h5>
                      <h6 class='card-subtitle mb-2 text-muted'><?php echo $categoria; ?></h6>
                      <p class='card-text'><?php echo $descricao; ?></p>
                    </div>
                  </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-block btn-outline-info" href="painel.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>