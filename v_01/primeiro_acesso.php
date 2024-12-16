<!doctype html>
<html lang="pt-br">

<head>
  <title>Help Desk</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.3.2 -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
      margin: 50px auto;
    }
    
    input {
      padding-left: 40px;
    }

    i {
      font-size: 20px;
      margin-right: 8px;  
    }
  </style>
</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-dark bg-dark p-3">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="40" height="40" class="d-inline-block align-center" alt="logo">
        App Help Desk
      </a>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">

        <div class="card-login pt-5">
          <div class="card shadow">
            <div class="card-header">
              <h4 class="mt-2 text-center">Login</h4>
            </div>

            <div class="card-body">
              <form action="valida_login.php" method="post">
                
              <div class="form-group my-3 d-flex align-items-center">
                  <i class="bi bi-person"></i>
                  <input name="nome-cad" type="text" class="form-control" placeholder="Nome">
                </div>
                
                <div class="form-group my-3 d-flex align-items-center">
                  <i class="bi bi-envelope"></i>
                  <input name="email-cad" type="email" class="form-control" placeholder="E-mail">
                </div>
                
                <div class="form-group my-3 d-flex align-items-center">
                  <i class="bi bi-lock"></i>
                  <input name="senha-cad" type="password" class="form-control" placeholder="Senha">
                </div>

                <button class="btn btn-md btn-primary btn-block my-3 w-100" type="submit" name="confirmar">
                  Confirmar
                </button>

              </form>
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