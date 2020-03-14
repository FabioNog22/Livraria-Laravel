<h3>Bem vindo aos Clientes</h3>

<a href="{{route('clientes.create')}}">Novo Usuario</a>

<ol>
    @foreach ($clientes as $c)
        <li>{{$c['cliente_nome']}} | <a href="{{route('clientes.edit',$c['id'])}}">Editar</a></li> 
    @endforeach
</ol>