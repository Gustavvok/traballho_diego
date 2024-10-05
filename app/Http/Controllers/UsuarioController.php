<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Mostra a página de usuários com a lista de usuários
    public function index()
    {
        //Mostra a lista da sessao
        $usuarios = session('usuarios', Usuario::all());
        
        return view('usuarios', compact('usuarios'));
    }

    // Faz o envio do formulário de nova conta
    public function store(Request $request)
    {
        //busca a lista de usuários da sessão
        $usuarios = session('usuarios', Usuario::all());

        // Adiciona o novo usuário enviado via POST à lista de usuários
        $usuarios[] = [
            'nome' => $request->input('nome'),
            'cargo' => $request->input('cargo'),
            'escolaridade' => $request->input('escolaridade'),
        ];

        // Armazena novamente a lista de usuários atualizada na sessao pra ser exibida
        session(['usuarios' => $usuarios]);

        // Redireciona de volta para a página de usuários dizendo que deu certo
        return redirect('/usuarios')->with('mensagem', 'Usuário cadastrado com sucesso!');
    }
}


