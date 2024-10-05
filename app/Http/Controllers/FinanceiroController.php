<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    // Exibe a página de financeiro com a lista de contas solciitadas
    public function index()
    {
        //Mostra a lista da sessao
        $contas = session('contas', [
            ['descricao' => 'Conta de luz', 'valor' => 200, 'tipo' => 'A pagar'],
            ['descricao' => 'Venda de produto', 'valor' => 1500, 'tipo' => 'A receber'],
            ['descricao' => 'Internet', 'valor' => 100, 'tipo' => 'A pagar'],
        ]);

        return view('financeiro', compact('contas'));
    }

    // FaZ o envio do formulário de nova conta
    public function store(Request $request)
    {
        // Busca as contas da sessão 
        $contas = session('contas', []);

        // Adiciona a nova conta enviada via POST à lista de contas conforme pedido
        $contas[] = [
            'descricao' => $request->input('descricao'),
            'valor' => $request->input('valor'),
            'tipo' => $request->input('tipo')
        ];

        // Armazena novamente a lista de contas atualizada na sessão
        session(['contas' => $contas]);

        return redirect('/financeiro')->with('mensagem', 'Conta cadastrada com sucesso!');
    }
}

