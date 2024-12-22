<?php

namespace App\Http\Controllers;

use App\Models\Called;
use App\Models\User;
use App\Services\Operations;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function new()
    {
        return view('newCalled');
    }

    public function newSubmit(Request $request)
    {
        // validate request
        $request->validate(
            // regras
            [
                'categoria' => 'required|in:Criar Usuário,Impressora,Hardware,Software,Rede,Outro',
                'categoria' => 'required | in:Criar Usuário|Impressora|Hardware| Software|Rede|Outro',
                'descricao' => 'required | min:6 | max:1000'
            ],
            // mensagens de erro
            [
                'titulo.required' => 'O título é obrigatório.',
                'titulo.min' => 'O título deve ter pelo menos :min caracteres.',
                'titulo.max' => 'O título deve ter no máximo :max caracteres.',

                'categoria.required' => 'A categoria é obrigatória.',

                'descricao.required' => 'A descrição é obrigatória.',
                'descricao.min' => 'A descrição deve ter pelo menos :min caracteres.',
                'descricao.max' => 'A descrição deve ter no máximo :max caracteres.',
            ]
        );

        echo 'Validado';

        // pega o id do usuáriio
        $id = session('user.id');

        // cria um chamado
        $called = new Called();
        $called->user_id = $id;
        $called->titulo = $request->input('titulo');
        $called->categoria = $request->input('categoria');
        $called->descricao = $request->input('descricao');
        $called->save();

        // redireciona para home
        return redirect()->route('home');
    }

    public function consult()
    {
        $id = session('user.id');
        $called = User::find($id)->called()->get()->toArray();

        return view('consultCalled', ['called' => $called]);
    }

    public function editCalled($id)
    {
        $id = Operations::decryptId($id);
    }

    public function deleteCalled($id)
    {
        $id = Operations::decryptId($id);
    }

    public function users()
    {
        return view('users');
    }
}
