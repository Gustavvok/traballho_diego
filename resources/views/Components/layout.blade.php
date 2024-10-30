@props(['title' => 'Minha Aplicação'])

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        .centralizado {
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
    <x-header /> 

    <div class="content">
        {{ $slot }}
    </div>

    <x-footer /> 
</body>
</html>
