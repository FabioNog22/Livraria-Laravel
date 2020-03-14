<h3>Bem vindo aos Clientes</h3>

<ol>
    @foreach ($clientes as $c)
        <li>{{$c['cliente_nome']}}</li>
    @endforeach
</ol>