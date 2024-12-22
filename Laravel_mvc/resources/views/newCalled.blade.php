@extends('layouts.main_layout')
@section('content')
    <main>
        <div class="container">
            <div class="row">

                <div class="card-abrir-chamado p-5">
                    <div class="card border border-dark shadow">
                        <div class="card-header">
                            <h3 class="mt-2 text-info ps-2">Abertura de chamado</h3>
                        </div>

                        <div class="card-body">

                            <form class="px-4 pb-2" method="post" action="{{ route('newSubmit') }}">
                                @csrf
                                <div class="form-group">

                                    <div class="form-group py-2">
                                        <label><em>Título</em></label>
                                        <input name="titulo" type="text" class="form-control" placeholder="Título" value="{{ old('titulo') }}">
                                        {{-- mostra o erro --}}
                                        @error('titulo')
                                        <div class="text-danger d-flex ">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <label><em>Categoria</em></label>
                                    <select name="categoria" class="form-control" {{ old('categoria') }}>
                                        <optgroup label="Selecione uma opção">
                                            <option hidden></option>
                                            <option value="criarUsuario">Criar Usuário</option>
                                            <option value="impressora">Impressora</option>
                                            <option value="hardware">Hardware</option>
                                            <option value="software">Software</option>
                                            <option value="rede">Rede</option>
                                            <option value="outro">Outro</option>
                                        </optgroup>
                                    </select>
                                    {{-- mostra o erro --}}
                                    @error('categoria')
                                    <div class="text-danger d-flex ">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="form-group py-2">
                                    <label><em>Descrição</em></label>
                                    <textarea name="descricao" class="form-control" rows="3" placeholder="Descrição do chamado...">{{ old('descricao') }}</textarea>
                                    {{-- mostra o erro --}}
                                    @error('descricao')
                                    <div class="text-danger d-flex ">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row mt-3">
                                    <div class="col text-end">
                                        <a href="{{ route('home') }}" class="btn btn-danger px-5 mx-4"><i
                                                class="fa-solid fa-ban me-2"></i>Cancelar</a>
                                        <button type="submit" class="btn btn-info px-5"><i
                                                class="fa-regular fa-circle-check me-2"></i>Salvar</button>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>

    <footer class="container-fluid bg-dark position-fixed bottom-0 w-100 py-2 border-top border-white border-opacity-10">
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
