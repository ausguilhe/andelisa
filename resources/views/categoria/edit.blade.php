<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT</title>
</head>
<body>

    @if ($erros->any())
    <div class="alert alert-danger">

        <ul>
        @foreach ($erros->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>        
    @endif

    {{ Form::model($categoria, array('route' => array('categoria.update', $categoria->id), 'method' => 'put')) }}

    {{ Form::label('nome', 'Nome') }}
    {{ Form::text('nome', $categoria->nome) }}
    <br/>
    
    {{ Form::submit('Enviar') }}

    {{ Form::close() }}

</body>
</html>