<h3>Listagem de Funcionarios</h3>
<ol>
    @foreach ($funcionarios as $f)
        <li>{{$f['nome']}}</li>
    @endforeach
</ol>