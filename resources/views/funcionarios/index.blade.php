<h3>Listagem de Funcionarios</h3>
<a href="{{route('funcionarios.create')}}">Criar Funcionario</a>
<ol>
    @foreach ($funcionarios as $f)
        <li>{{$f['func_nome']}}  <a href="{{route('funcionarios.edit',$f['id'])}}">Editar</a></li>        
        <li>{{$f['func_nome']}}  <a href="{{route('funcionarios.show',$f['id'])}}">Info</a></li>        
        <br>
    @endforeach
</ol>