<div class="row">
    <div class="col mt-4 px-4">
        <div class="card p-4 border border-dark shadow">
            <div class="row d-flex align-items-center">
                <div class="col-10">
                        <h4 class="text-info">{{ $call['titulo'] }}</h4>
                        <small class="text-secondary"><span class="opacity-75 me-2">Created at:
                            </span><strong>{{ date('d/m/Y H:i:s', strtotime($call['created_at'])) }}</strong>
                        </small>

                    @if ($call['created_at'] != $call['updated_at'] )
                        <small class="text-secondary ms-5"><span class="opacity-75 me-2">Update at:
                            </span><strong>{{ date('d/m/Y H:i:s', strtotime($call['updated_at'])) }}</strong>
                        </small>
                    @endif

                </div>
                <div class="col-2 text-end">
                    <a href=" {{ route('edit', ['id' => Crypt::encrypt($call['id'])]) }}" class="btn btn-outline-secondary btn-sm m-1 border border-dark shadow-sm"><i
                        class="fa-regular fa-pen-to-square"></i></a>
                    <a href=" {{ route('delete', ['id' => Crypt::encrypt($call['id'])]) }}" class="btn btn-outline-danger btn-sm m-1 border border-dark shadow-sm"><i
                        class="fa-regular fa-trash-can"></i></a>
                </div>
            </div>
            <hr>
            <p class="text-secondary">{{ $call['descricao'] }}</p>
        </div>
    </div>
</div>
