<?php

namespace App\Models;

class Usuario
{
    // Lista inicial de usuários aleatorios,mas se adicionar mais é somado junto!
    public static function all()
    {
        return [
            ['nome' => 'João', 'cargo' => 'Gerente', 'escolaridade' => 'Superior'],
            ['nome' => 'Maria', 'cargo' => 'Assistente', 'escolaridade' => 'Médio'],
            ['nome' => 'Pedro', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior'],
            ['nome' => 'Ana', 'cargo' => 'Secretária', 'escolaridade' => 'Médio'],
            ['nome' => 'Carlos', 'cargo' => 'Operador', 'escolaridade' => 'Médio'],
            ['nome' => 'Julia', 'cargo' => 'Recepcionista', 'escolaridade' => 'Médio'],
            ['nome' => 'Roberto', 'cargo' => 'Vendedor', 'escolaridade' => 'Superior'],
            ['nome' => 'Fernanda', 'cargo' => 'Analista', 'escolaridade' => 'Superior'],
            ['nome' => 'Luiz', 'cargo' => 'Auxiliar', 'escolaridade' => 'Médio'],
            ['nome' => 'Sofia', 'cargo' => 'Consultora', 'escolaridade' => 'Superior'],
            ['nome' => 'Sofia', 'cargo' => 'Consultora', 'escolaridade' => 'Superior'],
        ];
    }
}