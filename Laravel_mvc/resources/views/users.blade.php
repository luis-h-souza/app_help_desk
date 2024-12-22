@extends('layouts.main_layout')
@section('content')
    {{-- if(empty($usuario_cadastro)) {
    $tabela_vazia = "<p class='alert alert-info'>Nenhum usuário cadastrado</p>";
    } --}}
        <main>
            <div class="container">
                <div class="row">
                    <div class="card-consultar-chamado p-5">
                        <div class="card border border-dark shadow">
                            <div class="card-header p-2">
                                <h4 class="mt-2 ps-2 text-info">Cadastro de Usuários</h4>
                            </div>

                            <div class="card-body">

                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-info">Nome</th>
                                            <th class="text-info">E-mail</th>
                                            <th class="text-info">Senha</th>
                                            <th class="text-info text-end pe-5">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center align-middle">
                                            <td>$nome</td>
                                            <td>$email</td>
                                            <td>$senha</td>
                                            <td class='text-end'>
                                                <a href="#" class="btn btn-outline-secondary m-1 border border-dark shadow-sm"><i
                                                        class="fa-regular fa-pen-to-square "></i></a>
                                                <a href="#" class="btn btn-outline-danger m-1 border border-1 border-dark shadow-sm"><i
                                                        class="fa-regular fa-trash-can"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="row mt-5">
                                    <div class="col-6">
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
            class="container-fluid bg-dark position-fixed bottom-0 w-100 py-2 border-top border-white border-opacity-10">
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
