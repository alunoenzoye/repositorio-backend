<?php
require_once ("login.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

  <nav class="navbar navbar-light bg-light border-bottom border-secondary">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
                $arquivo = fopen("./registros/registro.csv" , "r");

                // Iterar sobre cada linha no arquivo csv procurando os campos.
                while (($data = fgetcsv($arquivo)) !== false) {
                  $titulo = $data[0];
                  $categoria = $data[1];
                  $descricao = $data[2];
                  
                  // Solução temporária para mostrar o html na página.
                  echo "<div class='card mb-3 bg-light'>";
                  echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$titulo</h5>";
                  echo "<h6 class='card-subtitle mb-2 text-muted'>$categoria</h6>";
                  echo "<p class='card-text'>$descricao</p>";
                  echo '</div>';
                  echo '</div>';
                }

              ?>

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