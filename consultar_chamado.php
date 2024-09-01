<? require_once "validador_acesso.php" ?>

<?php

  $chamados = [];
  //abrir o banco,txt
  $arquivo = fopen('banco.txt', 'r');

  // enqunato houver regsitros (linhas) a serem percorridos
  while(!feof($arquivo) ) { // testa pelo fim de um arquivo
    
    $registro = fgets($arquivo);
    $chamados []= $registro;
  }

  // fecha o arquivo aberto
  fclose($arquivo);

  echo '<pre>';
  print_r($chamados);
  echo '</pre>';
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title>Help Desk</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    .card-login {
      padding: 50px 0 0 0 !important;
      width: 450px;
      margin: 80px auto;
    }
  </style>

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-dark bg-dark p-3">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="40" height="40" class="d-inline-block align-center" alt="logo">
        App Help Desk
      </a>
      <ul class="navbar-nav me-1">
        <li class="vav-item">
          <a href="./logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="row">

        <div class="card-consultar-chamado p-5">
          <div class="card">
            <div class="card-header p-2">
              <h4 class="mt-2">Consulta de chamados</h4>
            </div>

            <div class="card-body">

              <? foreach($chamados as $chamado) { ?>
                
                
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title">Título do chamado...</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                    <p class="card-text">Descrição do chamado...</p>
                  </div>
                </div>
              <? } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="./home.php" class="btn btn-md btn-warning btn-block px-5 w-100">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>