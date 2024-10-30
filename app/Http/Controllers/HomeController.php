<?php

namespace App\Http\Controllers;

// Importando os modelos
use App\Models\Usuario;
use App\Models\Financeiro;

class HomeController extends Controller
{
    public function index()
    {
        // Recupera a lista de usuários da sessão ou usa a lista fixa do modelo sem converter para array
        $usuarios = session('usuarios', Usuario::all()); // Removido o ->toArray()

        // Recupera as contas financeiras da sessão ou usa uma lista fixa
        $contas = session('contas', [
            ['descricao' => 'Conta de luz', 'valor' => 200, 'tipo' => 'A pagar'],
            ['descricao' => 'Venda de produto', 'valor' => 1500, 'tipo' => 'A receber'],
            ['descricao' => 'Internet', 'valor' => 100, 'tipo' => 'A pagar'],
            ['descricao' => 'Aluguel', 'valor' => 1200, 'tipo' => 'A pagar'],
            ['descricao' => 'Serviço de consultoria', 'valor' => 3000, 'tipo' => 'A receber'],
            ['descricao' => 'Manutenção de equipamentos', 'valor' => 500, 'tipo' => 'A pagar'],
            ['descricao' => 'Venda de serviço', 'valor' => 800, 'tipo' => 'A receber'],
            ['descricao' => 'Compra de materiais', 'valor' => 400, 'tipo' => 'A pagar'],
            ['descricao' => 'Recebimento de prestação de serviço', 'valor' => 600, 'tipo' => 'A receber'],
            ['descricao' => 'Taxas administrativas', 'valor' => 200, 'tipo' => 'A pagar'],
        ]);

        // Calcula os totais de A pagar e A receber
        $total_a_pagar = array_sum(array_column(array_filter($contas, function ($conta) {
            return $conta['tipo'] === 'A pagar';
        }), 'valor'));

        $total_a_receber = array_sum(array_column(array_filter($contas, function ($conta) {
            return $conta['tipo'] === 'A receber';
        }), 'valor'));

        // Retorna a view com os dados necessários
        return view('home', compact('usuarios', 'total_a_pagar', 'total_a_receber'));
    }
}
