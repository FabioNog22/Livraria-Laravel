<h3>Criar novo Cliente</h3>

<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <input type="text" name="cliente_nome">
    <input type="submit" value="Save">
</form> 