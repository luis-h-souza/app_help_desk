<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate(
            // regras
            [
                'email' => 'required | email',
                'senha' => 'required | min:6 | max:16'
            ],
            // mensagens de erro
            [
                'email.required' => 'O email é obrigatório.',
                'email.email' => 'O email deve ser válido.',

                'senha.required' => 'A senha é obrigatória.',
                'senha.min' => 'A senha deve ter pelo menos :min caracteres.',
                'senha.max' => 'A senha deve ter no máximo :max caracteres.'
            ]
        );

        // pega o input do login
        $email = $request->input('email');
        $senha = $request->input('senha');

        // checar se o usuário existe -> que não está deletado da DB -> primeiro resultado
        $user = User::where('email', $email)->where('deleted_at', NULL)->first();
        // se usuário não existir
        if(!$user){
            // redireciona -> pra trás -> guardando o input -> com um erro específico
            return redirect()->back()->withInput()->with('loginError', 'E-mail ou senha incorretos.');
        }

        // checar se a senha existe
        if(!password_verify($senha, $user->senha)){
            return redirect()->back()->withInput()->with('loginError', 'E-mail ou senha incorretos.');
        }

        // atualiza o último login
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        // usuário logado
        session([
            'user' => [
                'id' => $user->id,
                'email' => $user->email
            ]
        ]);

        // redireciona para /home
        return redirect()->route('home');
    }

    public function logout()
    {
        // logout da aplicação
        session()->forget('email');
        return redirect()->to('/login');
    }
}
