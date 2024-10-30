<!-- resources/views/home.blade.php -->
<x-layout title="Home">
    <div class="centralizado">
        <!-- Lista de Usuários -->
        <h2>Lista de Usuários</h2>
        <ul>
            @foreach($usuarios as $usuario)
                <li>{{ $usuario['nome'] }} - {{ $usuario['cargo'] }} - {{ $usuario['escolaridade'] }}</li>
            @endforeach
        </ul>

        <!-- Totais Financeiros -->
        <h2>Totais Financeiros</h2>
        <p><strong>Total a Pagar:</strong> R$ {{ $total_a_pagar }}</p>
        <p><strong>Total a Receber:</strong> R$ {{ $total_a_receber }}</p>
    </div>
</x-layout>
