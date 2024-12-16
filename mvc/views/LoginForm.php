<!doctype html>
<html lang="pt-br">

<head>
  <title>Help Desk</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?= $baseUrl ?>/views/templates/css/style.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="navbar-brand ">
        <img src="<?= $baseUrl ?>/views/templates/assets/logo.png" width="40" height="40"
          class="d-inline-block ms-4" alt="logo">&nbsp; App Help Desk
      </div>
    </nav>
  </header>
  <main>
    <div class='container'>
      <div class='row'>
        <div class="col-4 m-auto pt-5">

          <div class='card shadow'>
            <div class='card-header'>
              <h4 class='mt-2 text-center'>Login</h4>
            </div>

            <div class='card-body'>

            <?= $erro ?>

              <form id="form" name="form" method='post' action="<?= $baseUrl ?>/login/autenticar">

                <div class="input-group my-4">
                  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-at"></i></span>
                  <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1" name="email">
                </div>

                <div class="input-group mb-4">
                  <span class="input-group-text" id="basic-addon1"><i class='bi bi-lock'></i></span>
                  <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1" name="senha">
                </div>

                <div class="form-check ps-1">
                  <input class="form-check-input-sm" type="checkbox" value="1" id="manter_logado" name="manter_logado">
                  <label class="form-check-label" for="manter_logado">
                  &nbsp;&nbsp;Manter logado
                  </label>
                </div>

                <button class='btn btn-md btn-primary btn-block my-3 w-100' type='submit'>Entrar</button>

                <a href='./primeiro_acesso.php' class='text-decoration-none'>Criar acesso</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="container-fluid bg-dark d-flex align-items-center">
    <!-- place footer here -->

    <small class="text-white fw-lighter">App Help Desk</small>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>