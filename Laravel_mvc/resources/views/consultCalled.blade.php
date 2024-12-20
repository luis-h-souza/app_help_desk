@extends('layouts.main_layout')
@section('content')

    <body>
        <header>
            <!-- place navbar here -->
            <nav class="navbar navbar-dark bg-dark shadow">
                <div class="navbar-brand border-0 my-2">
                    <img src="{{ asset('assets/images/logo.png') }}" width="50" height="auto" class="d-inline-block ms-4"
                        alt="logo">&nbsp;&nbsp; App Help Desk
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="row">

                    <div class="card-consultar-chamado p-5">
                        <div class="card">
                            <div class="card-header p-2">
                                <h4 class="mt-2 text-info ps-2">Consulta de chamados</h4>
                            </div>

                            <div class="card-body">

                                <div class="row mt-5">
                                    <div class="col-6">
                                        <a href="{{ route('home') }}" class="btn btn-md btn-warning btn-block px-5 w-100"><strong>Voltar</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <footer
            class="container-fluid bg-dark position-fixed bottom-0 w-100 py-4 border-top border-white border-opacity-10">
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
