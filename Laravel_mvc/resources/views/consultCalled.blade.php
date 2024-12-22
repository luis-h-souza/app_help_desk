@extends('layouts.main_layout')
@section('content')

        <main>
            <div class="container">
                <div class="row">

                    <div class="card-consultar-chamado p-5">
                        <div class="card border border-dark shadow">
                            <div class="card-header p-2 d-flex justify-content-between align-items-center">
                                <h3 class="mt-2 text-info ps-2">Consulta de chamados</h3>
                                <div class="d-flex justify-content-end my-4 pe-2">
                                    <a href="{{ route('new') }}" class="btn btn-info px-3">
                                        <i class="fa-regular fa-pen-to-square me-2"></i>Abrir chamado
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">

                                <!-- Sem chamados disponíveis -->
                                @if (count($called) == 0)
                                    <div class="row mt-5">
                                        <div class="col text-center">
                                            <p class="display-6 mb-5 text-secondary opacity-50">Você não possui chamados.</p>

                                        </div>
                                    </div>
                                @else

                                    @foreach ($called as $call)
                                        @include('called')
                                    @endforeach

                                @endif

                                <div class="row mt-4">
                                    <div class="col-6 my-2">
                                        <a href="{{ route('home') }}"
                                            class="btn btn-md btn-warning btn-block px-5 w-100"><strong>Voltar</strong></a>
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

            <small class="text-white fw-lighter"><span class="text-info">&copy;</span> App Help Desk</small>
        </footer>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    @endsection
