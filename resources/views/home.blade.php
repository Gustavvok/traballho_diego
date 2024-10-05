<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- css basico interno só para os conteudos ficarems centralizados,e também estava tentando externo e por fim acabei
     não conseguindo-->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        h2 {
            margin-bottom: 10px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
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
</body>
</html>
