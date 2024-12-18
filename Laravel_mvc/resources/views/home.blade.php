@extends('layouts.main_layout')
@section('content')

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-dark bg-dark">
                <div class="navbar-brand border-0 my-2">
                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <img src="{{ asset('assets/images/logo.png') }}" width="50" height="auto" class="d-inline-block ms-4" alt="logo">
                        &nbsp; App Help Desk
                    </a>
                </div>
                <ul class="navbar-nav me-4">
                    <h5 class="nav-item fw-bold">
                        <a href="{{ route('logout') }}" class="nav-link border-0 ">SAIR</a>
                    </h5>
                </ul>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="row">

                    <div class="card-home pt-5">
                        <div class="card col-10 my-0 mx-auto">
                            <div class="card-header">
                                <h3 class="mt-2 text-info">Menu</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center p-3">
                                        <a class="text-center text-decoration-none" href="#">
                                            <img src="{{ asset('assets/images/formulario_abrir_chamado.png') }}"
                                                width="70" height="70">
                                            <p class="m-1">Abrir Chamado</p>
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center p-3">
                                        <a class="text-center text-decoration-none" href="./consultar_chamado.php">
                                            <img src="{{ asset('assets/images/formulario_consultar_chamado.png') }}"
                                                width="70" height="70">
                                            <p class="m-1">Consultar Chamado</p>
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center p-3">
                                        <a class="text-center text-decoration-none" href="./tabela_cadastro.php">
                                            <img src="{{ asset('assets/images/bd.png') }}" width="70" height="70">
                                            <p class="m-1">Usuários Cadastros</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

        <footer
            class="container-fluid bg-dark position-fixed bottom-0 w-100 py-4 border-top border-white border-opacity-10">
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
