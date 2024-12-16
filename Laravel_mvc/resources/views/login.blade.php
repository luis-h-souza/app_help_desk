@extends('layouts.main_layout')
@section('content')

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-dark bg-dark shadow">
            <div class="navbar-brand border-0 my-2">
                <img src="assets/images/logo.png" width="50" height="auto"
                    class="d-inline-block ms-4" alt="logo">&nbsp; App Help Desk
            </div>
        </nav>
    </header>
    <main>
        <div class='container'>
            <div class='row'>
                <div class="col-5 m-auto pt-5">

                    <div class='card shadow-lg rounded-4'>
                        <div class='card-header rounded-top-4'>
                            <h2 class='my-2 text-center text-info fw-bold'>Login</h2>
                        </div>

                        <div class='card-body'>


                            <form class="p-2" id="form" name="form" method='post' action="loginSubmit" novalidate>
                                @csrf

                                <div class="input-group my-4">
                                    <input type="email" class="form-control d-inline-flex focus-ring focus-ring-info py-2.5 px-2 rounded-2" placeholder="E-mail" aria-label="E-mail"
                                        aria-describedby="basic-addon1" name="email">
                                </div>

                                <div class="input-group mb-4">
                                    <input type="password" class="form-control d-inline-flex focus-ring focus-ring-info py-2.5 px-2 rounded-2" placeholder="Senha" aria-label="Senha"
                                        aria-describedby="basic-addon1" name="senha">
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input d-inline-flex focus-ring focus-ring-info py-1 px-2 rounded-1" type="checkbox" value="1" id="manter_logado"
                                        name="manter_logado">
                                    <label class="form-check-label" for="manter_logado">Manter logado</label>
                                </div>

                                <button class='btn btn-md btn-primary btn-block my-3 w-100'
                                    type='submit'><strong>Entrar</strong></button>

                                <a href='#' class='text-decoration-none'>Criar acesso</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container-fluid bg-dark position-fixed bottom-0 w-100 py-4">
        <!-- place footer here -->

        <small class="text-white fw-lighter">&copy; App Help Desk</small>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

@endsection
