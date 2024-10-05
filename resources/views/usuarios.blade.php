<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <!-- css basico interno só para os conteudos ficarems centralizados-->
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
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Lista de Usuários</h1>

    <!-- Exibe mensagem de sucesso ao cadastrar um novo usuário -->
    @if(session('mensagem'))
        <p style="color: green;">{{ session('mensagem') }}</p>
    @endif

    <!-- Formulário para cadastrar o novo usuário -->
    <h2>Cadastrar novo usuário</h2>
    <form action="/usuarios" method="POST">
        @csrf
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Cargo: <input type="text" name="cargo" required></label><br>
        <label>Escolaridade:
            <select name="escolaridade" required>
                <option value="Médio">Médio</option>
                <option value="Superior">Superior</option>
            </select>
        </label><br>
        <button type="submit">Cadastrar</button>
    </form>

    <!-- Lista de usuários -->
    <h2>Usuários Cadastrados</h2>
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario['nome'] }} - {{ $usuario['cargo'] }} - {{ $usuario['escolaridade'] }}</li>
        @endforeach
    </ul>
</body>
</html>
