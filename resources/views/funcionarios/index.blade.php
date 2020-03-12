<h3>Listagem de Funcionarios</h3>
<ol>
    @foreach ($funcionarios as $f)
        <li>{{$f['nome']}}  <a href="{{route('funcionarios.edit',$f['id'])}}">Editar</a></li>
        
        <br>
    @endforeach
</ol>