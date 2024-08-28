<?php
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro2');
  }
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
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-dark bg-dark p-3">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>
  </header>
  <main>

    <div class="card-header p-5">
      <h3 class="text-center">Abertura de chamado</h3>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col">

          <form class="col-10 px-5 my-0 mx-auto">
            <div class="form-group py-2">
              <label>Título</label>
              <input type="text" class="form-control" placeholder="Título">
            </div>

            <div class="form-group py-2">
              <label>Categoria</label>
              <select class="form-control">
                <option>Criação Usuário</option>
                <option>Impressora</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Rede</option>
              </select>
            </div>

            <div class="form-group py-2">
              <label>Descrição</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>

            <div class="row mt-5">
              <div class="d-flex justify-content-between">
                
                <div class="">
                  <button class="btn btn-md btn-warning btn-block align-itens-center px-5" type="submit">Voltar</button>
                </div>

                <div class="">
                  <button class="btn btn-md btn-primary btn-block px-5" type="submit">Abrir</button>
                </div>

              </div>
            </div>
          </form>

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