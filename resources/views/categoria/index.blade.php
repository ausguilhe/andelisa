<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
</head>
<body>

    <!-- botao criar -->
    <a href="{{ URL::to('categoria/create') }}"><h2>Criar</h2></a>

    <--
    abrir tabela colocar cabeçalho
    listar categorias
    fechar tabela
    -->

    @if (session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <script>
        function ConfirmDelete() {
            return confirm('Tem certeza que deseja excluir esse registro?');
        }
    </script>

    <table class= "table no-margin">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>descrição</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categorias as $key => $value)

                <tr>
                    <td>{{ $value-> id }}</td>
                    <td>{{ $value-> nome }}</td>

                    <td>
                        <a href="{{ URL::to('categoria/' . $value->id) }}">Visualizar</a>
                    </td>
                    <td>
                        <a href="{{ URL::to('categoria/' . $value->id . 'edit') }}">Editar</a>
                    </td>
                    <td>
                        {{ Form::open(array('url' => 'categoria/' . $value->id, 'onsubmit' => 'return ConfirmDelete()'))}}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Excluir', array('class' => 'btn btn-danger'))}}
                        {{ Form::close() }}
                    </td>

                </tr>
                    
                
            @endforeach
                
        
</body>
</html>