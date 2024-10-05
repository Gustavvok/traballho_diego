<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro</title>
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
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }
        label {
            display: flex;
            justify-content: space-between;
            width: 300px;
        }
        button {
            align-self: center;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 320px;
            text-align: center;
        }
        p {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Financeiro</h1>

    <!-- Exibir mensagem de sucesso ao cadastrar uma nova conta -->
    @if(session('mensagem'))
        <p>{{ session('mensagem') }}</p>
    @endif

    <!-- Botão e formulário para cadastrar nova conta -->
    <h2>Cadastrar nova conta</h2>
    <form action="/financeiro" method="POST">
        @csrf
        <label>Descrição: <input type="text" name="descricao" required></label>
        <label>Valor: <input type="number" name="valor" required></label>
        <label>Tipo:
            <select name="tipo" required>
                <option value="A pagar">A pagar</option>
                <option value="A receber">A receber</option>
            </select>
        </label>
        <button type="submit">Cadastrar</button>
    </form>

    <!-- Lista de Contas a Pagar e Receber -->
    <h2>Lista de Contas a Pagar e Receber</h2>
    <ul>
        @foreach($contas as $conta)
            <li>{{ $conta['descricao'] }} - R$ {{ $conta['valor'] }} - {{ $conta['tipo'] }}</li>
        @endforeach
    </ul>
</body>
</html>
