<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
</head>
<body>

    <h2>Visualizar</h2>

    <p>ID:                          {{ $categoria->id}}</p>
    <p>Nome:                        {{ $categoria->nome}}</p>
    <p>Descrição:                   {{ $categoria->descricao}}</p>
    <p>Criação                      {{ Carbon\Carbon::parse($categoria->create_at)->format('d/m/y H:i') }}</p>
    <p>Última modificação:          {{ Carbon\Carbon::parse($categoria->update_at)->format('d/m/y H:i')}}</p>
</body>
</html>
