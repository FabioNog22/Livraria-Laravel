<h3>Novo Funcionario</h3>

<form action="{{route('funcionarios.store')}}" method="POST">
    @csrf
    <input type="text" name="func_nome">
    <input type="submit" value="Salvar">
</form>